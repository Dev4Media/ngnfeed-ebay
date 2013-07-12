<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/6/13 - 10:08 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model\Request;


class RequestFactory
{

    public function getRequest($apiCallName)
    {
        $requestName = $apiCallName.'Request';
        if($this->requestExists($requestName)) {
            $request = $this->getClass($requestName);
            return new $request();
        }
        else {
            throw new \InvalidArgumentException("No Request ".$requestName." Found");
        }
    }

    private function requestExists($requestName)
    {
        $class = $this->getClass($requestName);

        return class_exists($class);
    }

    private function getClass($className)
    {
        return $this->getNamespace()."\\".$className;
    }

    private function getNamespace()
    {
        return __NAMESPACE__;
    }

}