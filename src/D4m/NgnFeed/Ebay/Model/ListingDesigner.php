<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/24/13 - 2:11 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class ListingDesigner extends Entity
{
    protected $layoutID;
    protected $optimalPictureSize;
    protected $themeID;
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
     * @param mixed $layoutID
     */
    public function setLayoutID($layoutID)
    {
        $this->layoutID = $layoutID;
    }

    /**
     * @return mixed
     */
    public function getLayoutID()
    {
        return $this->layoutID;
    }

    /**
     * @param mixed $optimalPictureSize
     */
    public function setOptimalPictureSize($optimalPictureSize)
    {
        $this->optimalPictureSize = $optimalPictureSize;
    }

    /**
     * @return mixed
     */
    public function getOptimalPictureSize()
    {
        return $this->optimalPictureSize;
    }

    /**
     * @param mixed $themeID
     */
    public function setThemeID($themeID)
    {
        $this->themeID = $themeID;
    }

    /**
     * @return mixed
     */
    public function getThemeID()
    {
        return $this->themeID;
    }
}