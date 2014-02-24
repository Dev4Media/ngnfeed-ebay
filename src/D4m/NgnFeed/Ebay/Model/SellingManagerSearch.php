<?php
/**
 * Created by PhpStorm.
 * User: raul
 * Date: 2/24/14
 * Time: 11:07 AM
 */

namespace D4m\NgnFeed\Ebay\Model;


class SellingManagerSearch extends Entity
{
    protected $searchType;
    protected $searchValue;
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
     * @param mixed $searchType
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
    }

    /**
     * @return mixed
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param mixed $searchValue
     */
    public function setSearchValue($searchValue)
    {
        $this->searchValue = $searchValue;
    }

    /**
     * @return mixed
     */
    public function getSearchValue()
    {
        return $this->searchValue;
    }
} 