<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/27/13 - 8:02 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

abstract class Entity implements EntityInterface
{
    protected $virtualFieldsCollection;

    public function __call($method, $args)
    {
        $command = substr($method, 0, 3);
        $field = lcfirst(substr($method, 3));
        if ($command == "add") {
            $this->add($field, $args);
        } else {
            throw new \BadMethodCallException("There is no method ".$method." on ".get_class($this));
        }
    }

    /**
     * Add an object to a collection
     *
     * @param string $field
     * @param array $args
     *
     * @throws \BadMethodCallException
     * @throws \InvalidArgumentException
     */
    private function add($field, $args)
    {
        if ($this->hasField($field) && null !== $args[0]) {
            $this->virtualFieldsCollection[$field][] = $args[0];
        } else if ( null === $args[0]){
            throw new \InvalidArgumentException("The argument given is null ");
        } else {
            throw new \BadMethodCallException("There is no method add".ucfirst($field)."() on ".get_class($this));
        }
    }

    protected function hasField($field)
    {
        $fields = $this->getFields();

        return in_array($field, $fields) || $field == 'virtualFieldsCollection';
    }

    protected function getFields()
    {
        $reflectionObject = new \ReflectionObject($this);
        $fields = array_map(function ($reflectionProperty) {
            return $reflectionProperty->getName();
        }, $reflectionObject->getProperties());

        return $fields;
    }

    public function getVirtualFieldsCollection()
    {
        return $this->virtualFieldsCollection;
    }
}