<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 9:14 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class TaxTable extends Entity
{
    protected $taxJurisdiction;

    /**
     * @param mixed $taxJurisdiction
     */
    public function setTaxJurisdiction($taxJurisdiction)
    {
        $this->taxJurisdiction = $taxJurisdiction;
    }

    /**
     * @return mixed
     */
    public function getTaxJurisdiction()
    {
        return $this->taxJurisdiction;
    }
}