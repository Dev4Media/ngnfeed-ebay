<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/23/13 - 2:37 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Service;

abstract class BaseApiCall implements ApiCall
{
    protected $session;
    protected $requestFactory;
    protected $parameters;
    protected $apiCallName;

    public function initializeParameters($apiCallName)
    {
        $this->apiCallName = ['X-EBAY-API-CALL-NAME' => $apiCallName];
        $this->parameters['headers'] = $this->apiCallName;
        $this->parameters['root'] = $apiCallName.'Request';
    }

    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param mixed $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param RequestFactory $requestFactory
     */
    public function setRequestFactory($requestFactory)
    {
        $this->requestFactory = $requestFactory;

        return $this;
    }

    protected function addOptionsToRequest($request, $options)
    {
        foreach ($options as $method => $value ) {
            $methodCamelized = $this->camelize($method);
            $request->{'set'. $methodCamelized}($value);
        }

        return $request;
    }

    protected function camelize($attributeName)
    {
        return preg_replace_callback(
            '/(^|_|\.)+(.)/', function ($match) {
                return ('.' === $match[1] ? '_' : '').strtoupper($match[2]);
            }, $attributeName
        );
    }

    /**
     * @return mixed
     */
    public function getRequestFactory()
    {
        return $this->requestFactory;
    }

    public function getRequest()
    {
        return $this->requestFactory
                ->getRequest($this->apiCallName['X-EBAY-API-CALL-NAME'])
        ;
    }

    public function execute()
    {
        $request = $this->addOptionsToRequest(
            $this->getRequest(),
            $this->options
        );
        $this->parameters['request'] = $request;

        $response = $this->session->sendRequest($this->apiCallName, $this->parameters);

        return $response;
    }
}