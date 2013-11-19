<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/27/13 - 12:41 AM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Transport;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HttpClientSpec extends ObjectBehavior
{
    /**
     * @param Guzzle\Http\Client $client
     */
    function let($client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Transport\HttpClient');
    }

    /**
     * @param Guzzle\Http\Client $client
     * @param Guzzle\Http\Message\Request $request
     * @param Guzzle\Http\Message\Response $response
     */
    function it_should_return_response_when_send($client, $request, $response)
    {

        $fakeUrl = 'https://api.sandbox.ebay.spec/ws/api.dll';
        $body = '<xml></xml>';
        $headers = [];
        $request->send()->shouldBeCalled()->willReturn($response);
        $client->post($fakeUrl, $headers, $body)->shouldBeCalled()->willReturn($request);

        $this->send($fakeUrl, $headers, $body)->shouldHaveType('Guzzle\Http\Message\Response');
    }
}