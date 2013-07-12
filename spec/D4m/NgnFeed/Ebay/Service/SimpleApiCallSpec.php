<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/11/13 - 6:52 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Service;

use PhpSpec\ObjectBehavior;

class SimpleApiCallSpec extends ObjectBehavior
{
    const US_SITE_ID = 0;

    function let()
    {
        $allowedService = "GetCategories";
        $options = [
            'category_site_id' => self::US_SITE_ID,
        ];
        $this->beConstructedWith($allowedService, $options);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Service\SimpleApiCall');
    }


    /**
     * @param D4m\NgnFeed\Ebay\Security\Session $session
     * @param D4m\NgnFeed\Ebay\Model\Request\RequestFactory $requestFactory
     * @param D4m\NgnFeed\Ebay\Model\Request\GetCategoriesRequest $getCategoriesRequest
     */
    function it_executes_a_category_request($session, $requestFactory,
                                            $getCategoriesRequest)
    {
        $apiCallName = ['X-EBAY-API-CALL-NAME' => 'GetCategories'];
        $parameters = [];
        $parameters['headers'] = $apiCallName;
        $parameters['root'] = 'GetCategoriesRequest';
        $parameters['request'] = $getCategoriesRequest;

        $response = '<xml>Response</xml>';

        $requestFactory->getRequest('GetCategories')
            ->shouldBeCalled()->willReturn($getCategoriesRequest);

        $this->setSession($session);
        $this->setRequestFactory($requestFactory);

        $session->sendRequest(
            $apiCallName,
            $parameters
        )->shouldBeCalled()->willReturn($response);

        $this->execute()->shouldReturn('<xml>Response</xml>');
    }
}