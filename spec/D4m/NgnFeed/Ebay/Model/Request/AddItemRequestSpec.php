<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/1/13 - 6:58 PM
 * 
 */

namespace spec\D4m\NgnFeed\Ebay\Model\Request;

use PhpSpec\ObjectBehavior;

class AddItemRequestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Model\Request\AddItemRequest');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Model\Item $item
     */
    function it_should_return_item_when_set($item)
    {

        $this->setItem($item);

        $this->getItem()->shouldHaveType('D4m\NgnFeed\Ebay\Model\Item');
    }
}