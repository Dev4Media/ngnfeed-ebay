<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/9/13 - 8:22 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model\Request;


class GeteBayDetailsRequest extends BaseRequest
{
    protected $detailName;

    /**
     * @param mixed $detailName
     */
    public function setDetailName($detailName)
    {
        $this->detailName = $detailName;
    }

    /**
     * @return mixed
     */
    public function getDetailName()
    {
        return $this->detailName;
    }
}