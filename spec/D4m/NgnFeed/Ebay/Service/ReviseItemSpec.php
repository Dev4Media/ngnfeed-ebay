<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/10/13 - 5:34 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Service;

use PhpSpec\ObjectBehavior;

class ReviseItemSpec extends ObjectBehavior
{
    /**
     * @param D4m\NgnFeed\Ebay\Model\Item $item
     */
    function let($item)
    {
        $options = [];
        $options['item'] = $item;
        $this->beConstructedWith($options);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Service\ReviseItem');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Model\Request\RequestFactory $requestFactory
     * @param D4m\NgnFeed\Ebay\Model\Request\ReviseItemRequest $reviseItemRequest
     */
    function it_should_return_a_response_when_revising_an_item($session, $requestFactory,
                                                           $reviseItemRequest)
    {
        $apiCallName = ['X-EBAY-API-CALL-NAME' => 'ReviseItem'];
        $parameters = [];
        $parameters['headers'] = $apiCallName;
        $parameters['root'] = 'ReviseItemRequest';
        $parameters['request'] = $reviseItemRequest;

        $response = '<xml>Response</xml>';

        $requestFactory->getRequest('ReviseItem')
            ->shouldBeCalled()->willReturn($reviseItemRequest);

        $this->setSession($session);
        $this->setRequestFactory($requestFactory);

        $session->sendRequest(
            $apiCallName,
            $parameters
        )->shouldBeCalled()->willReturn($response);

        $this->execute()->shouldReturn('<xml>Response</xml>');
    }

}