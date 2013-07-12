<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/11/13 - 10:14 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class Pagination extends Entity
{
    protected $entriesPerPage;
    protected $pageNumber;
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
     * @param mixed $entriesPerPage
     */
    public function setEntriesPerPage($entriesPerPage)
    {
        $this->entriesPerPage = $entriesPerPage;
    }

    /**
     * @return mixed
     */
    public function getEntriesPerPage()
    {
        return $this->entriesPerPage;
    }

    /**
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return mixed
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
}