<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 9:26 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class RateTableDetails extends Entity
{
    protected $domesticRateTable;
    protected $internationalRateTable;
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
     * @param mixed $domesticRateTable
     */
    public function setDomesticRateTable($domesticRateTable)
    {
        $this->domesticRateTable = $domesticRateTable;
    }

    /**
     * @return mixed
     */
    public function getDomesticRateTable()
    {
        return $this->domesticRateTable;
    }

    /**
     * @param mixed $internationalRateTable
     */
    public function setInternationalRateTable($internationalRateTable)
    {
        $this->internationalRateTable = $internationalRateTable;
    }

    /**
     * @return mixed
     */
    public function getInternationalRateTable()
    {
        return $this->internationalRateTable;
    }
}