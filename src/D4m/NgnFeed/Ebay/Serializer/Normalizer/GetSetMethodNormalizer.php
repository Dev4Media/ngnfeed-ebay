<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/3/13 - 8:25 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Serializer\Normalizer;

use D4m\NgnFeed\Ebay\Model\Item;
use D4m\NgnFeed\Ebay\Model\PictureDetails;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class GetSetMethodNormalizer extends SerializerAwareNormalizer implements NormalizerInterface, DenormalizerInterface
{
    protected $callbacks = array();
    protected $ignoredAttributes = array();
    protected $camelizedAttributes = array();
    protected $ignoreNullAttributes = true;

    /**
     * Set normalization callbacks
     *
     * @param array $callbacks help normalize the result
     *
     * @throws InvalidArgumentException if a non-callable callback is set
     */
    public function setCallbacks(array $callbacks)
    {
        foreach ($callbacks as $attribute => $callback) {
            if (!is_callable($callback)) {
                throw new InvalidArgumentException(sprintf('The given callback for attribute "%s" is not callable.', $attribute));
            }
        }
        $this->callbacks = $callbacks;
    }

    /**
     * Set ignored attributes for normalization
     *
     * @param array $ignoredAttributes
     */
    public function setIgnoredAttributes(array $ignoredAttributes)
    {
        $this->ignoredAttributes = $ignoredAttributes;
    }

    public function setIgnoredNullAttributes($ignoreNullAttributes = true)
    {
        $this->ignoreNullAttributes = $ignoreNullAttributes;
    }

    /**
     * Set attributes to be camelized on denormalize
     *
     * @param array $camelizedAttributes
     */
    public function setCamelizedAttributes(array $camelizedAttributes)
    {
        $this->camelizedAttributes = $camelizedAttributes;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $reflectionObject = new \ReflectionObject($object);
        $reflectionMethods = $reflectionObject->getMethods(\ReflectionMethod::IS_PUBLIC);
        $virtualFieldsCollection = $object->getVirtualFieldsCollection();

        $attributes = array();
        foreach ($reflectionMethods as $method) {

            if ($this->isGetMethod($method)) {
                $attributeName = substr($method->name, 3);

                if (in_array($attributeName, $this->ignoredAttributes)) {
                    continue;
                }

                $attributeValue = $method->invoke($object);

                if($this->ignoreNullAttributes && is_null($attributeValue) ) {
                    continue;
                }

                if (array_key_exists($attributeName, $this->callbacks)) {
                    $attributeValue = call_user_func($this->callbacks[$attributeName], $attributeValue);
                }
                if (null !== $attributeValue && !is_scalar($attributeValue)) {
                    $attributeValue = $this->serializer->normalize($attributeValue, $format);
                }

                $attributes[$attributeName] = $attributeValue;
            }

            if(count($virtualFieldsCollection) > 0) {

                foreach($virtualFieldsCollection as $field => $virtualFieldValues) {
                    foreach( $virtualFieldValues as $index => $attributeValue) {
                        $attributeName = ucfirst($field).'___'.$index;
                        if (null !== $attributeValue && !is_scalar($attributeValue)) {
                            $attributeValue = $this->serializer->normalize($attributeValue, $format);
                        }
                        $attributes[$attributeName] = $attributeValue;
                    }
                }

            }
        }

        return $attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $reflectionClass = new \ReflectionClass($class);
        $constructor = $reflectionClass->getConstructor();

        if ($constructor) {
            $constructorParameters = $constructor->getParameters();

            $params = array();
            foreach ($constructorParameters as $constructorParameter) {
                $paramName = lcfirst($this->formatAttribute($constructorParameter->name));

                if (isset($data[$paramName])) {
                    $params[] = $data[$paramName];
                    // don't run set for a parameter passed to the constructor
                    unset($data[$paramName]);
                } elseif (!$constructorParameter->isOptional()) {
                    throw new RuntimeException(
                        'Cannot create an instance of '.$class.
                        ' from serialized data because its constructor requires '.
                        'parameter "'.$constructorParameter->name.
                        '" to be present.');
                }
            }

            $object = $reflectionClass->newInstanceArgs($params);
        } else {
            $object = new $class;
        }

        foreach ($data as $attribute => $value) {
            $setter = 'set'.$this->formatAttribute($attribute);

            if (method_exists($object, $setter)) {
                $object->$setter($value);
            }
            else if(is_callable(array( $object, $setter))) {
                $object->$setter($value);
            }
        }

        return $object;
    }

    /**
     * Format attribute name to access parameters or methods
     * As option, if attribute name is found on camelizedAttributes array
     * returns attribute name in camelcase format
     *
     * @param string $attributeName
     * @return string
     */
    protected function formatAttribute($attributeName)
    {
        if (in_array($attributeName, $this->camelizedAttributes)) {
            return preg_replace_callback(
                '/(^|_|\.)+(.)/', function ($match) {
                    return ('.' === $match[1] ? '_' : '').strtoupper($match[2]);
                }, $attributeName
            );
        }

        return $attributeName;
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && $this->supports(get_class($data));
    }

    /**
     * {@inheritDoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->supports($type);
    }

    /**
     * Checks if the given class has any get{Property} method.
     *
     * @param string $class
     *
     * @return Boolean
     */
    private function supports($class)
    {
        $class = new \ReflectionClass($class);
        $methods = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($methods as $method) {
            if ($this->isGetMethod($method)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if a method's name is get.* and can be called without parameters.
     *
     * @param \ReflectionMethod $method the method to check
     *
     * @return Boolean whether the method is a getter.
     */
    private function isGetMethod(\ReflectionMethod $method)
    {
        return (
            0 === strpos($method->name, 'get') &&
            3 < strlen($method->name) &&
            0 === $method->getNumberOfRequiredParameters()
        );
    }

    /**
     * Checkis if a method's name is get.* but set as __call function
     *
     * @param \ReflectionObject $reflectionObject
     * @param $reflectionAttribute
     *
     * @return bool
     */
    private function hasGetMethod(\ReflectionObject $reflectionObject, $reflectionAttribute)
    {
        return $reflectionObject->hasProperty($reflectionAttribute);
    }

}