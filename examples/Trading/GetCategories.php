<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 10/17/13 - 12:07 AM
 * 
 */

require_once(__DIR__ . '/../../vendor/autoload.php');

use D4m\NgnFeed\Ebay\TradingManager;
use D4m\NgnFeed\Ebay\Security\Session;
use D4m\NgnFeed\Ebay\Security\Auth\Credentials;

use D4m\NgnFeed\Ebay\Model\Enum\DetailLevelCode;
use D4m\NgnFeed\Ebay\Serializer\SerializerFactory;
use D4m\NgnFeed\Ebay\Service\ServiceFactory;
use D4m\NgnFeed\Ebay\Model\Request\RequestFactory;

use Symfony\Component\Yaml\Yaml;

$parameters = Yaml::parse(__DIR__ . '/Resources/config.yml');
$keys = $parameters['parameters'];

$credentials = new Credentials();
$credentials->setKeys($keys);

$token = $parameters['token'];

$session = new Session($credentials);
$session->setToken($token);
$serviceFactory = new ServiceFactory();
$serializerFactory = new SerializerFactory();
$requestFactory = new RequestFactory();
$tradingManager = new TradingManager($session, $serviceFactory);
$tradingManager->setSerializerFactory($serializerFactory);
$tradingManager->setRequestFactory($requestFactory);

$response = $tradingManager->executeService('GetCategories', [
        'category_site_ID' => 0,
        'detail_level' => DetailLevelCode::RETURN_ALL
    ]
);
$responseXml = $response->xml();
$xml = $responseXml->asXML();