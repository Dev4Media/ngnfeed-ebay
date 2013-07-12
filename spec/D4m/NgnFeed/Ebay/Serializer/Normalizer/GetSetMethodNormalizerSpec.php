<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/3/13 - 11:45 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Serializer\Normalizer;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GetSetMethodNormalizerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Serializer\Normalizer\GetSetMethodNormalizer');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Model\Item $item
     * @param Symfony\Component\Serializer\Serializer $serializer
     */
    function it_should_return_array_from_simple_ebay_model($item, $serializer)
    {
        $serializer->normalize(Argument::any(), 'xml')
            ->shouldBeCalled()
            ->willReturn(['Title' => 'Test Item', 'StartPrice' => 375.00 ]);
        $this->setSerializer($serializer);

        $item->setTitle('Test Item');
        $item->setStartPrice(375.00);

        $this->normalize($item, 'xml')
            ->shouldReturn(['Prophecy' => ['Title' => 'Test Item', 'StartPrice' => 375.00 ] ]);

    }
}