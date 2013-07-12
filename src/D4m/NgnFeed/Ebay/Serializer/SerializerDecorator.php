<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/28/13 - 3:31 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Serializer;


class SerializerDecorator
{
    private $serializer;

    public function setSerializer($serializer)
    {
        $this->serializer = $serializer;
    }

    public function serialize($data, $format)
    {
        return $this->cleanVirtualFieldsCollection(
            $this->serializer->serialize($data, $format)
        );
    }

    private function cleanVirtualFieldsCollection($data)
    {
        return preg_replace("/___[\d+]>/i", ">", $data);
    }

}