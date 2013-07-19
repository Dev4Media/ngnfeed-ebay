<?php

namespace D4m\NgnFeed\Ebay\Model;

class SellerReturnProfile extends Entity
{
    protected $returnProfileID;
    protected $returnProfileName;
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
     * @param mixed $returnProfileID
     */
    public function setReturnProfileID($returnProfileID)
    {
        $this->returnProfileID = $returnProfileID;
    }

    /**
     * @return mixed
     */
    public function getReturnProfileID()
    {
        return $this->returnProfileID;
    }

    /**
     * @param mixed $returnProfileName
     */
    public function setReturnProfileName($returnProfileName)
    {
        $this->returnProfileName = $returnProfileName;
    }

    /**
     * @return mixed
     */
    public function getReturnProfileName()
    {
        return $this->returnProfileName;
    }
}