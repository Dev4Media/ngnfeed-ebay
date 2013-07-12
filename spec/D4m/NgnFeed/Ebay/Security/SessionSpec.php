<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/23/13 - 2:12 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Security;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SessionSpec extends ObjectBehavior
{
    const API_VERSION = 827;
    /**
     * @param D4m\NgnFeed\Ebay\Security\Auth\Credentials $credentials
     * @param D4m\NgnFeed\Ebay\Serializer\SerializerDecorator $serializer
     */
    function let($credentials, $serializer)
    {
        $serializer->beADoubleOf('D4m\NgnFeed\Ebay\Serializer\SerializerDecorator');
        $this->beConstructedWith($credentials, $serializer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Security\Session');
    }

    function it_should_have_a_version()
    {
        $this->setApiVersion(self::API_VERSION);
        $this->getApiVersion()->shouldReturn(self::API_VERSION);
    }

    /**
     * @param D4m\NgnFeed\Ebay\Transport\HttpClient $transport
     * @param Guzzle\Http\Message\Response $response
     */
    function it_should_return_response_when_sending_a_request($transport, $response)
    {

        $apiCallName = ['X-EBAY-API-CALL-NAME' => "TestCall"];
        $parameters = ['headers' => $apiCallName, 'request' => [] ];
        $authType = 'api';

        $transport->send(Argument::any(), Argument::any(), Argument::any())
            ->shouldBeCalled()
            ->willReturn($response);
        $this->setTransport($transport);
        $response = $this->sendRequest($apiCallName, $parameters, $authType);

        $response->shouldHaveType('Guzzle\Http\Message\Response');

    }



}