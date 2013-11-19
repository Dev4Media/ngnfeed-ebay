<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 9:21 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class Measure extends Entity
{
    protected $value;

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}