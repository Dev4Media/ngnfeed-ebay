<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/9/13 - 6:16 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VerifyAddItemSpec extends ObjectBehavior
{
    /**
     * @param D4m\NgnFeed\Ebay\Model\Item $item
     */
    function let($item)
    {
        $options['item'] = $item;
        $this->beConstructedWith($options);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Service\VerifyAddItem');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Model\Request\RequestFactory $requestFactory
     * @param D4m\NgnFeed\Ebay\Model\Request\VerifyAddItemRequest $verifyAddItemRequest
     */
    function it_should_return_a_response_when_execute($session, $requestFactory,
                                                      $verifyAddItemRequest)
    {
        $apiCallName = ['X-EBAY-API-CALL-NAME' => 'VerifyAddItem'];
        $parameters = [];
        $parameters['headers'] = $apiCallName;
        $parameters['root'] = 'VerifyAddItemRequest';
        $parameters['request'] = $verifyAddItemRequest;

        $response = '<xml>Response</xml>';

        $requestFactory->getRequest('VerifyAddItem')
            ->shouldBeCalled()->willReturn($verifyAddItemRequest);

        $this->setSession($session);
        $this->setRequestFactory($requestFactory);

        $session->sendRequest(
            $apiCallName,
            $parameters
        )->shouldBeCalled()->willReturn($response);

        $this->execute()->shouldReturn('<xml>Response</xml>');
    }
}