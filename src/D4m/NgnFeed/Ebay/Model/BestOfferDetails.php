<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/24/13 - 2:18 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;


class BestOfferDetails extends Entity
{
    protected $bestOfferCount;
    protected $bestOfferEnabled;
    protected $bestOffer;
    protected $bestOfferStatus;
    protected $bestOfferType;
    protected $any;

    /**
     * @param mixed $any
     */
    public function setAny($any)
    {
        $this->any = $any;
    }

    /**
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param mixed $bestOffer
     */
    public function setBestOffer($bestOffer)
    {
        $this->bestOffer = $bestOffer;
    }

    /**
     * @return mixed
     */
    public function getBestOffer()
    {
        return $this->bestOffer;
    }

    /**
     * @param mixed $bestOfferCount
     */
    public function setBestOfferCount($bestOfferCount)
    {
        $this->bestOfferCount = $bestOfferCount;
    }

    /**
     * @return mixed
     */
    public function getBestOfferCount()
    {
        return $this->bestOfferCount;
    }

    /**
     * @param mixed $bestOfferEnabled
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
    }

    /**
     * @return mixed
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * @param mixed $bestOfferStatus
     */
    public function setBestOfferStatus($bestOfferStatus)
    {
        $this->bestOfferStatus = $bestOfferStatus;
    }

    /**
     * @return mixed
     */
    public function getBestOfferStatus()
    {
        return $this->bestOfferStatus;
    }

    /**
     * @param mixed $bestOfferType
     */
    public function setBestOfferType($bestOfferType)
    {
        $this->bestOfferType = $bestOfferType;
    }

    /**
     * @return mixed
     */
    public function getBestOfferType()
    {
        return $this->bestOfferType;
    }
}