<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/23/13 - 2:11 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Security;

use D4m\NgnFeed\Ebay\Transport\HttpClient;

class Session
{
    const URL_SANDBOX = "https://api.sandbox.ebay.com/ws/api.dll";
    const URL_PRODUCTION = "https://api.ebay.com/ws/api.dll";
    const EBL_BASE_COMPONENTS = "urn:ebay:apis:eBLBaseComponents";
    const AUTH_TOKEN = "AUTH_TOKEN";

    private $url;
    private $transport;
    private $credentials;
    private $serializer;
    private $token;
    private $apiVersion;
    private $apiDetailLevel;
    private $siteId;
    private $format = "xml";

    public function __construct($credentials, $serializer = null) {

        $this->url = self::URL_SANDBOX;
        $this->transport = new HttpClient();
        $this->credentials = $credentials;
        $this->serializer = $serializer;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setMode($mode)
    {
        if($mode == "live") {
            $this->url = self::URL_PRODUCTION;
        }
        else {
            $this->url = self::URL_SANDBOX;
        }
    }

    /**
     * @return bool
     */
    public function haveCredentials()
    {
        return ($this->credentials instanceof CredentialsInterface);
    }

    /**
     * Set Serializer
     * @param $serializer
     */
    public function setSerializer($serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Set Transport
     * @param $transport
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
    }

    /**
     * Get Credentials
     *
     * @return Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set ApiVersion
     * @param integer $apiVersion
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * Get ApiVersion
     *
     * @return integer
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param mixed $apiDetailLevel
     */
    public function setApiDetailLevel($apiDetailLevel)
    {
        $this->apiDetailLevel = $apiDetailLevel;
    }

    /**
     * @return mixed
     */
    public function getApiDetailLevel()
    {
        return $this->apiDetailLevel;
    }

    /**
     * Set Site Id
     *
     * @param integer $siteId
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * Get Site Id
     *
     * @return integer
     */
    public function getSiteId()
    {
        return $this->siteId;
    }


    public function sendRequest($apiCallName, $parameters, $authType = self::AUTH_TOKEN, $parseResult = true)
    {
        $headers = $this->buildHeaders($parameters['headers']);
        $payload = $this->buildRequestBody($apiCallName, $parameters, $authType);
        $response = $this->send($headers, $payload);
        if($parseResult) {
            return $response;
        }
        return $response;
    }

    protected function buildHeaders($apiHeaders)
    {
        $headers = [
            'X-EBAY-API-COMPATIBILITY-LEVEL' => $this->apiVersion,
            'X-EBAY-API-SITEID' => $this->siteId,
            'X-EBAY-API-DETAIL-LEVEL' => $this->apiDetailLevel,
            'Content-Type' => 'text/xml'
        ];

        $headers['X-EBAY-API-APP-NAME'] = $this->credentials->getKey('appId');
        $headers['X-EBAY-API-DEV-NAME'] = $this->credentials->getKey('devId');
        $headers['X-EBAY-API-CERT-NAME'] = $this->credentials->getKey('certId');


        foreach($apiHeaders as $key => $header) {
            $headers[$key] = $header;
        }
        return $headers;
    }

    protected function buildRequestBody($apiCallName, $parameters, $authType)
    {
        if($authType == self::AUTH_TOKEN ) {
            $parameters['request']->addRequesterCredentials($this->getToken());
        }
        $serializedRequest = $this->serializer->serialize($parameters['request'], $this->format);
        $requestBody = $this->addXmlns($serializedRequest, $apiCallName['X-EBAY-API-CALL-NAME']);
        $requestBody = $this->addEncoding($requestBody, 'utf-8');
        
        return  $requestBody;

    }

    protected function addXmlns($serializedRequest, $apiCallName)
    {
        $rootTag = $apiCallName.'Request';

        return str_replace("<".$rootTag.">", "<".$rootTag.' xmlns="'.self::EBL_BASE_COMPONENTS.'">',
            $serializedRequest);

    }

    protected function addEncoding($requestBody, $encoding)
    {
        $encodedText = '<?xml version="1.0" encoding="'.$encoding.'" ?>';
        return str_replace('<?xml version="1.0"?>', $encodedText, $requestBody );

    }

    protected function send($headers, $payload)
    {
        return $this->transport->send($this->url, $headers, $payload);
    }

}