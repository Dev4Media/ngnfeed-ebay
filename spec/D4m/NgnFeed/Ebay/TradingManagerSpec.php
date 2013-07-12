<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/21/13 - 4:44 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay;

use PhpSpec\ObjectBehavior;

class TradingManagerSpec extends ObjectBehavior
{
    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Service\ServiceFactory $serviceFactory
     */
    function let($session, $serviceFactory)
    {
        $this->beConstructedWith($session, $serviceFactory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\TradingManager');
    }

    function it_should_have_a_session()
    {
        $this->hasSession()->shouldReturn(true);
    }

    /**
     * @param D4m\NgnFeed\Ebay\Model\Item $item
     * @param D4m\NgnFeed\Ebay\Service\AddItem $addItem
     * @param D4m\NgnFeed\Ebay\Service\ServiceFactory $serviceFactory
     * @param D4m\NgnFeed\Ebay\Model\Request\RequestFactory $requestFactory
     * @param D4m\NgnFeed\Ebay\Serializer\SerializerFactory $serializerFactory
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Serializer\SerializerDecorator $serializer
     */
    function it_should_call_ebay_api_to_add_item_using_xml($item, $addItem,
        $serviceFactory, $requestFactory, $serializerFactory, $session, $serializer)
    {
        $serviceFactory->getService('AddItem', $item)->willReturn($addItem);
        $serializerFactory->getSerializer('AddItemRequest')->shouldBeCalled()->willReturn($serializer);
        $addItem->setSession($session)->willReturn($addItem);
        $addItem->setRequestFactory($requestFactory)->shouldBeCalled()->willReturn($addItem);
        $addItem->execute()->shouldBeCalled()->willReturn('<xml><AddItemRequest xmlns="urn:ebay:apis:eBLBaseComponents"></xml>');

        $this->setRequestFactory($requestFactory);
        $this->setSerializerFactory($serializerFactory);
        $this->executeService('AddItem', $item )->shouldReturn('<xml><AddItemRequest xmlns="urn:ebay:apis:eBLBaseComponents"></xml>');
    }
}