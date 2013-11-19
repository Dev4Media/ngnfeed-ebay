<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class GetCategoriesRequest extends BaseRequest
{
    protected $categorySiteID;
    protected $categoryParent;
    protected $levelLimit;
    protected $viewAllNodes;

    /**
     * @param string $categoryParent
     */
    public function setCategoryParent($categoryParent)
    {
        $this->categoryParent = $categoryParent;
    }

    /**
     * @return string
     */
    public function getCategoryParent()
    {
        return $this->categoryParent;
    }

    /**
     * @param integer|string $categorySiteID
     */
    public function setCategorySiteID($categorySiteID)
    {
        $this->categorySiteID = $categorySiteID;
    }

    /**
     * @return integer|string
     */
    public function getCategorySiteID()
    {
        return $this->categorySiteID;
    }

    /**
     * @param integer $levelLimit
     */
    public function setLevelLimit($levelLimit)
    {
        $this->levelLimit = $levelLimit;
    }

    /**
     * @return integer
     */
    public function getLevelLimit()
    {
        return $this->levelLimit;
    }

    /**
     * @param boolean $viewAllNodes
     */
    public function setViewAllNodes($viewAllNodes)
    {
        $this->viewAllNodes = $viewAllNodes;
    }

    /**
     * @return boolean
     */
    public function getViewAllNodes()
    {
        return $this->viewAllNodes;
    }
}
