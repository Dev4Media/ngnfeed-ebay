<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/19/13 - 3:21 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class SellingStatus extends Entity 
{
    protected $bidCount;
    protected $bidIncrement;
    protected $convertedCurrentPrice;
    protected $currentPrice;
    protected $highBidder;
    protected $leadCount;
    protected $minimumToBid;
    protected $quantitySold;
    protected $reserveMet;
    protected $secondChanceEligible;
    protected $bidderCount;
    protected $listingStatus;
    protected $finalValueFee;
    protected $promotionalSaleDetails;
    protected $adminEnded;
    protected $soldAsBin;
    protected $any;

    /**
     * @param mixed $adminEnded
     */
    public function setAdminEnded($adminEnded)
    {
        $this->adminEnded = $adminEnded;
    }

    /**
     * @return mixed
     */
    public function getAdminEnded()
    {
        return $this->adminEnded;
    }

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
     * @param mixed $bidCount
     */
    public function setBidCount($bidCount)
    {
        $this->bidCount = $bidCount;
    }

    /**
     * @return mixed
     */
    public function getBidCount()
    {
        return $this->bidCount;
    }

    /**
     * @param mixed $bidderCount
     */
    public function setBidderCount($bidderCount)
    {
        $this->bidderCount = $bidderCount;
    }

    /**
     * @return mixed
     */
    public function getBidderCount()
    {
        return $this->bidderCount;
    }

    /**
     * @param mixed $bidIncrement
     */
    public function setBidIncrement($bidIncrement)
    {
        $this->bidIncrement = $bidIncrement;
    }

    /**
     * @return mixed
     */
    public function getBidIncrement()
    {
        return $this->bidIncrement;
    }

    /**
     * @param mixed $convertedCurrentPrice
     */
    public function setConvertedCurrentPrice($convertedCurrentPrice)
    {
        $this->convertedCurrentPrice = $convertedCurrentPrice;
    }

    /**
     * @return mixed
     */
    public function getConvertedCurrentPrice()
    {
        return $this->convertedCurrentPrice;
    }

    /**
     * @param mixed $currentPrice
     */
    public function setCurrentPrice($currentPrice)
    {
        $this->currentPrice = $currentPrice;
    }

    /**
     * @return mixed
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * @param mixed $finalValueFee
     */
    public function setFinalValueFee($finalValueFee)
    {
        $this->finalValueFee = $finalValueFee;
    }

    /**
     * @return mixed
     */
    public function getFinalValueFee()
    {
        return $this->finalValueFee;
    }

    /**
     * @param mixed $highBidder
     */
    public function setHighBidder($highBidder)
    {
        $this->highBidder = $highBidder;
    }

    /**
     * @return mixed
     */
    public function getHighBidder()
    {
        return $this->highBidder;
    }

    /**
     * @param mixed $leadCount
     */
    public function setLeadCount($leadCount)
    {
        $this->leadCount = $leadCount;
    }

    /**
     * @return mixed
     */
    public function getLeadCount()
    {
        return $this->leadCount;
    }

    /**
     * @param mixed $listingStatus
     */
    public function setListingStatus($listingStatus)
    {
        $this->listingStatus = $listingStatus;
    }

    /**
     * @return mixed
     */
    public function getListingStatus()
    {
        return $this->listingStatus;
    }

    /**
     * @param mixed $minimumToBid
     */
    public function setMinimumToBid($minimumToBid)
    {
        $this->minimumToBid = $minimumToBid;
    }

    /**
     * @return mixed
     */
    public function getMinimumToBid()
    {
        return $this->minimumToBid;
    }

    /**
     * @param mixed $promotionalSaleDetails
     */
    public function setPromotionalSaleDetails($promotionalSaleDetails)
    {
        $this->promotionalSaleDetails = $promotionalSaleDetails;
    }

    /**
     * @return mixed
     */
    public function getPromotionalSaleDetails()
    {
        return $this->promotionalSaleDetails;
    }

    /**
     * @param mixed $quantitySold
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
    }

    /**
     * @return mixed
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * @param mixed $reserveMet
     */
    public function setReserveMet($reserveMet)
    {
        $this->reserveMet = $reserveMet;
    }

    /**
     * @return mixed
     */
    public function getReserveMet()
    {
        return $this->reserveMet;
    }

    /**
     * @param mixed $secondChanceEligible
     */
    public function setSecondChanceEligible($secondChanceEligible)
    {
        $this->secondChanceEligible = $secondChanceEligible;
    }

    /**
     * @return mixed
     */
    public function getSecondChanceEligible()
    {
        return $this->secondChanceEligible;
    }

    /**
     * @param mixed $soldAsBin
     */
    public function setSoldAsBin($soldAsBin)
    {
        $this->soldAsBin = $soldAsBin;
    }

    /**
     * @return mixed
     */
    public function getSoldAsBin()
    {
        return $this->soldAsBin;
    }
}