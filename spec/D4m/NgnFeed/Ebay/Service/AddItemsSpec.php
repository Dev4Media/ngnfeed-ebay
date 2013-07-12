<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/9/13 - 6:33 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Service;

use PhpSpec\ObjectBehavior;

class AddItemsSpec extends ObjectBehavior
{
    /**
     * @param D4m\NgnFeed\Ebay\Model\AddItemRequestContainer $addItemRequestContainer
     */
    function let($addItemRequestContainer)
    {
        $this->beConstructedWith($addItemRequestContainer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Service\AddItems');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Model\Request\RequestFactory $requestFactory
     * @param D4m\NgnFeed\Ebay\Model\Request\AddItemsRequest $addItemsRequest
     * @param D4m\NgnFeed\Ebay\Model\AddItemRequestContainer $addItemRequestContainer
     */
    function it_should_return_a_response_when_add_one_item($session, $requestFactory,
                                                      $addItemsRequest, $addItemRequestContainer)
    {
        $apiCallName = ['X-EBAY-API-CALL-NAME' => 'AddItems'];
        $parameters = [];
        $parameters['headers'] = $apiCallName;
        $parameters['root'] = 'AddItemsRequest';
        $parameters['request'] = $addItemsRequest;

        $response = '<xml>Response</xml>';
        //$addItemsRequest->addAddItemRequestContainer($addItemRequestContainer)->shouldBeCalled()->willReturn();
        $requestFactory->getRequest('AddItems')
            ->shouldBeCalled()->willReturn($addItemsRequest);

        $this->setSession($session);
        $this->setRequestFactory($requestFactory);
        $this->setAddItemRequestContainer($addItemRequestContainer);
        $session->sendRequest(
            $apiCallName,
            $parameters
        )->shouldBeCalled()->willReturn($response);

        $this->execute()->shouldReturn('<xml>Response</xml>');
    }

}