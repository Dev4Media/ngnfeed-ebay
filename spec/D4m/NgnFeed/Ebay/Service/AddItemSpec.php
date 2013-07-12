<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/22/13 - 10:15 AM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddItemSpec extends ObjectBehavior
{
    /**
     * @param D4m\NgnFeed\Ebay\Model\Item $item
     */
    function let($item)
    {
        $this->beConstructedWith($item);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Service\AddItem');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     */
    function it_should_have_a_session($session)
    {
        $this->setSession($session);
        $this->getSession()->shouldHaveType('D4m\NgnFeed\Ebay\Security\Session');

    }

    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Model\Request\RequestFactory $requestFactory
     * @param D4m\NgnFeed\Ebay\Model\Request\AddItemRequest $addItemRequest
     */
    function it_should_return_a_response_when_execute($session, $requestFactory,
        $addItemRequest)
    {
        $apiCallName = ['X-EBAY-API-CALL-NAME' => 'AddItem'];
        $parameters = [];
        $parameters['headers'] = $apiCallName;
        $parameters['root'] = 'AddItemRequest';
        $parameters['request'] = $addItemRequest;

        $response = '<xml>Response</xml>';
        $requestFactory->getRequest('AddItem')
            ->shouldBeCalled()->willReturn($addItemRequest);

        $this->setSession($session);
        $this->setRequestFactory($requestFactory);
        $session->sendRequest(
            $apiCallName,
            $parameters
        )->shouldBeCalled()->willReturn($response);

        $this->execute()->shouldReturn('<xml>Response</xml>');
    }


}