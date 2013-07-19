<?php

namespace D4m\NgnFeed\Ebay\Model;

class PaymentDetails extends Entity
{
    protected $hoursToDeposit;
    protected $daysToFullPayment;
    protected $depositAmount;
    protected $depositType;
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
     * @param mixed $daysToFullPayment
     */
    public function setDaysToFullPayment($daysToFullPayment)
    {
        $this->daysToFullPayment = $daysToFullPayment;
    }

    /**
     * @return mixed
     */
    public function getDaysToFullPayment()
    {
        return $this->daysToFullPayment;
    }

    /**
     * @param mixed $depositAmount
     */
    public function setDepositAmount($depositAmount)
    {
        $this->depositAmount = $depositAmount;
    }

    /**
     * @return mixed
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * @param mixed $depositType
     */
    public function setDepositType($depositType)
    {
        $this->depositType = $depositType;
    }

    /**
     * @return mixed
     */
    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * @param mixed $hoursToDeposit
     */
    public function setHoursToDeposit($hoursToDeposit)
    {
        $this->hoursToDeposit = $hoursToDeposit;
    }

    /**
     * @return mixed
     */
    public function getHoursToDeposit()
    {
        return $this->hoursToDeposit;
    }
}