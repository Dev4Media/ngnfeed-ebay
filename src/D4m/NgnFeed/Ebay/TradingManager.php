<?php

namespace D4m\NgnFeed\Ebay;

use D4m\NgnFeed\Ebay\Auth\CredentialsInterface;
use D4m\NgnFeed\Ebay\Security\Session;

class TradingManager implements Ebay
{
    const API_VERSION = 831;
    const SITE_ID_US = 0;
    const API_DETAIL_LEVEL = 0;

    private $session;
    private $serviceFactory;
    private $serializerFactory;
    private $requestFactory;

    public function __construct($session, $serviceFactory)
    {
        $this->setSession($session);
        $this->serviceFactory = $serviceFactory;
    }

    /**
     * @param ServiceFactory $serviceFactory
     */
    public function setServiceFactory($serviceFactory)
    {
        $this->serviceFactory = $serviceFactory;
    }

    public function setSerializerFactory($serializerFactory)
    {
        $this->serializerFactory = $serializerFactory;
    }

    /**
     * @param RequestFactory $requestFactory
     */
    public function setRequestFactory($requestFactory)
    {
        $this->requestFactory = $requestFactory;
    }

    /**
     * @return RequestFactory
     */
    public function getRequestFactory()
    {
        return $this->requestFactory;
    }

    /**
     * @return ServiceFactory
     */
    public function getServiceFactory()
    {
        return $this->serviceFactory;
    }

    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     */
    public function setSession($session)
    {
        $this->session = $session;
        $this->session->setApiVersion(self::API_VERSION);
        $this->session->setSiteId(self::SITE_ID_US);
        $this->session->setApiDetailLevel(self::API_DETAIL_LEVEL);
    }

    /**
     * @return D4m\NgnFeed\Ebay\Security\Session $session
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return (!is_null($this->session) && $this->session instanceof Session);
    }


    public function executeService($serviceName, $arguments = [])
    {
        $this->configureSession(
            $this->serializerFactory
                ->getSerializer(ucfirst($serviceName).'Request')
        );

        return $this->serviceFactory->getService($serviceName, $arguments)
            ->setSession($this->session)
            ->setRequestFactory($this->requestFactory)
            ->execute()
        ;
    }

    private function configureSession($serializer)
    {
        $this->session->setSerializer($serializer);
    }
}