<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/6/13 - 1:01 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Serializer;

use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Serializer;
use D4m\NgnFeed\Ebay\Serializer\Normalizer\GetSetMethodNormalizer;


class SerializerFactory
{
    public function getSerializer($rootName)
    {
        $serializer = new SerializerDecorator();

        $encoders = [ new XmlEncoder($rootName) ];
        $getSetMethodNormalizer = new GetSetMethodNormalizer();
        $getSetMethodNormalizer->setIgnoredAttributes(['VirtualFieldsCollection']);
        $normalizers = [ $getSetMethodNormalizer ];
        $sfSerializer = new Serializer($normalizers, $encoders);
        $serializer->setSerializer($sfSerializer);

        return $serializer;
    }

}