<?php

namespace D4m\NgnFeed\Ebay\Model;

class SellerProfiles extends Entity
{
    protected $sellerShippingProfile;
    protected $sellerReturnProfile;
    protected $sellerPaymentProfile;
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
     * @param mixed $sellerPaymentProfile
     */
    public function setSellerPaymentProfile($sellerPaymentProfile)
    {
        $this->sellerPaymentProfile = $sellerPaymentProfile;
    }

    /**
     * @return mixed
     */
    public function getSellerPaymentProfile()
    {
        return $this->sellerPaymentProfile;
    }

    /**
     * @param mixed $sellerReturnProfile
     */
    public function setSellerReturnProfile($sellerReturnProfile)
    {
        $this->sellerReturnProfile = $sellerReturnProfile;
    }

    /**
     * @return mixed
     */
    public function getSellerReturnProfile()
    {
        return $this->sellerReturnProfile;
    }

    /**
     * @param mixed $sellerShippingProfile
     */
    public function setSellerShippingProfile($sellerShippingProfile)
    {
        $this->sellerShippingProfile = $sellerShippingProfile;
    }

    /**
     * @return mixed
     */
    public function getSellerShippingProfile()
    {
        return $this->sellerShippingProfile;
    }
}