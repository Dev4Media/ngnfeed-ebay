<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/21/13 - 6:06 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Security\Auth;

use PhpSpec\ObjectBehavior;
use Prophecy\Exception\InvalidArgumentException;

class CredentialsSpec extends ObjectBehavior
{

    function it_should_initialize()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Security\Auth\Credentials');
    }

    function it_should_return_true_when_syntactically_correct_credentials_are_given()
    {
        $keys = [
            "name"  => "sandbox",
            "devId" => "111122223333",
            "appId" => "appid-2222-abc",
            "certId" => "certid-2222-abc",
        ];
        $this->setKeys($keys);
        $this->isCompliant()->shouldReturn(true);
        $this->getKey("name")->shouldReturn('sandbox');
    }

    function it_should_throw_error_when_credentials_key_do_not_exist()
    {
        $this->shouldThrow(new InvalidArgumentException('Invalid Credential'))
            ->duringGetKey('invalid_key');
    }


}