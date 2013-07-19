<?php

namespace D4m\NgnFeed\Ebay\Model;

class SellerPaymentProfile extends Entity
{
    protected $paymentProfileID;
    protected $paymentProfileName;
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
     * @param mixed $paymentProfileID
     */
    public function setPaymentProfileID($paymentProfileID)
    {
        $this->paymentProfileID = $paymentProfileID;
    }

    /**
     * @return mixed
     */
    public function getPaymentProfileID()
    {
        return $this->paymentProfileID;
    }

    /**
     * @param mixed $paymentProfileName
     */
    public function setPaymentProfileName($paymentProfileName)
    {
        $this->paymentProfileName = $paymentProfileName;
    }

    /**
     * @return mixed
     */
    public function getPaymentProfileName()
    {
        return $this->paymentProfileName;
    }
}