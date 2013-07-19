<?php

namespace D4m\NgnFeed\Ebay\Model;

class SellerShippingProfile extends Entity
{
    protected $shippingProfileID;
    protected $shippingProfileName;
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
     * @param mixed $shippingProfileID
     */
    public function setShippingProfileID($shippingProfileID)
    {
        $this->shippingProfileID = $shippingProfileID;
    }

    /**
     * @return mixed
     */
    public function getShippingProfileID()
    {
        return $this->shippingProfileID;
    }

    /**
     * @param mixed $shippingProfileName
     */
    public function setShippingProfileName($shippingProfileName)
    {
        $this->shippingProfileName = $shippingProfileName;
    }

    /**
     * @return mixed
     */
    public function getShippingProfileName()
    {
        return $this->shippingProfileName;
    }
}