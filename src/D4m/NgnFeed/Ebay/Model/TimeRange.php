<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 2/24/14 - 11:08 AM
 */

namespace D4m\NgnFeed\Ebay\Model;

class TimeRange extends Entity
{
    protected $timeFrom;
    protected $timeTo;
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
     * @param mixed $timeFrom
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = $timeFrom;
    }

    /**
     * @return mixed
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * @param mixed $timeTo
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = $timeTo;
    }

    /**
     * @return mixed
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }
} 