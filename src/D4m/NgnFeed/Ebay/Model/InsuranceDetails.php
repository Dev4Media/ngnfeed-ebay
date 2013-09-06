<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 9:24 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class InsuranceDetails extends Entity
{
    protected $insuranceFee;
    protected $insuranceOption;
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
     * @param mixed $insuranceFee
     */
    public function setInsuranceFee($insuranceFee)
    {
        $this->insuranceFee = $insuranceFee;
    }

    /**
     * @return mixed
     */
    public function getInsuranceFee()
    {
        return $this->insuranceFee;
    }

    /**
     * @param mixed $insuranceOption
     */
    public function setInsuranceOption($insuranceOption)
    {
        $this->insuranceOption = $insuranceOption;
    }

    /**
     * @return mixed
     */
    public function getInsuranceOption()
    {
        return $this->insuranceOption;
    }
}