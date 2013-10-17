<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/2/13 - 7:28 AM
 *
 */
require_once(__DIR__ . '/../../vendor/autoload.php');

use D4m\NgnFeed\Ebay\TradingManager;
use D4m\NgnFeed\Ebay\Security\Session;
use D4m\NgnFeed\Ebay\Security\Auth\Credentials;
use D4m\NgnFeed\Ebay\Serializer\SerializerDecorator;

use D4m\NgnFeed\Ebay\Model\Enum\ListingDurationCode;
use D4m\NgnFeed\Ebay\Model\Enum\CurrencyCode;
use D4m\NgnFeed\Ebay\Model\Enum\SiteCode;
use D4m\NgnFeed\Ebay\Model\Enum\CountryCode;
use D4m\NgnFeed\Ebay\Model\Enum\BuyerPaymentMethodCode;
use D4m\NgnFeed\Ebay\Model\Enum\ListingTypeCode;
use D4m\NgnFeed\Ebay\Model\Enum\GalleryTypeCode;
use D4m\NgnFeed\Ebay\Model\Enum\ReturnsAcceptedOptionsCode;
use D4m\NgnFeed\Ebay\Model\Enum\ItemConditionCode;
use D4m\NgnFeed\Ebay\Model\Enum\ShippingTypeCode;
use D4m\NgnFeed\Ebay\Model\Enum\ShippingServiceCode;

use D4m\NgnFeed\Ebay\Model\Item;
use D4m\NgnFeed\Ebay\Model\Category;
use D4m\NgnFeed\Ebay\Model\ReturnPolicy;
use D4m\NgnFeed\Ebay\Model\PictureDetails;
use D4m\NgnFeed\Ebay\Model\ShippingDetails;
use D4m\NgnFeed\Ebay\Model\ShippingServiceOptions;

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

$response = $tradingManager->executeService('UploadSiteHostedPictures',
    ['external_picture_url' => 'http://www.yourdomain.com/images/image.jpg']);

$simpleResponse = $response->xml();
$pictureURL1 = (string) $simpleResponse->SiteHostedPictureDetails->FullURL;

$item = new Item();
$item->setTitle("Harry Potter");
$htmlContent = "Book Description";
$item->setDescription(utf8_encode($htmlContent));

$category = new Category();
$category->setCategoryID(100);

$item->setPrimaryCategory($category);

$item->setQuantity(1);
$item->setListingType(ListingTypeCode::FIXED_PRICE_ITEM);
$item->setStartPrice(35.00);

$item->setCurrency(CurrencyCode::USD);
$item->setBestOfferEnabled(true);

$item->setConditionID(1000);

$pictureDetails = new PictureDetails();
$pictureDetails->setGalleryType(GalleryTypeCode::GALLERY);
$pictureDetails->addPictureURL($pictureURL1);

$item->setPictureDetails($pictureDetails);

$item->setListingDuration(ListingDurationCode::GTC);
$item->setPaymentMethods(BuyerPaymentMethodCode::PAY_PAL);
$item->setPayPalEmailAddress("mail@domain.com");

$item->setSite(SiteCode::US);
$item->setCountry(CountryCode::US);
$item->setLocation("City, State");


$shippingServiceOptions = new ShippingServiceOptions();
$shippingServiceOptions->setShippingService(ShippingServiceCode::SHIPPING_METHOD_STANDARD);
$shippingDetails = new ShippingDetails();
$shippingDetails->setShippingType(ShippingTypeCode::FREE);
$shippingDetails->setShippingServiceOptions($shippingServiceOptions);
$item->setShippingDetails($shippingDetails);

$returnPolicy = new ReturnPolicy();
$returnPolicy->setReturnsAcceptedOption(ReturnsAcceptedOptionsCode::RETURNS_NOT_ACCEPTED);
$item->setReturnPolicy($returnPolicy);

$response = $tradingManager->executeService('AddItem', [ 'item' =>  $item ]);
