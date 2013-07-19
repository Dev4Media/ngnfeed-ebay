<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/5/13 - 8:59 PM
 *
 */

namespace D4m\NgnFeed\Ebay\Model;


class PictureDetails extends Entity
{
    protected $galleryType;
    protected $galleryURL;
    protected $photoDisplay;
    protected $pictureURL;
    protected $pictureSource;
    protected $galleryDuration;
    protected $galleryStatus;
    protected $galleryErrorInfo;
    protected $externalPictureURL;
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
     * @param mixed $externalPictureURL
     */
    public function setExternalPictureURL($externalPictureURL)
    {
        $this->externalPictureURL = $externalPictureURL;
    }

    /**
     * @return mixed
     */
    public function getExternalPictureURL()
    {
        return $this->externalPictureURL;
    }

    /**
     * @param mixed $galleryDuration
     */
    public function setGalleryDuration($galleryDuration)
    {
        $this->galleryDuration = $galleryDuration;
    }

    /**
     * @return mixed
     */
    public function getGalleryDuration()
    {
        return $this->galleryDuration;
    }

    /**
     * @param mixed $galleryErrorInfo
     */
    public function setGalleryErrorInfo($galleryErrorInfo)
    {
        $this->galleryErrorInfo = $galleryErrorInfo;
    }

    /**
     * @return mixed
     */
    public function getGalleryErrorInfo()
    {
        return $this->galleryErrorInfo;
    }

    /**
     * @param mixed $galleryStatus
     */
    public function setGalleryStatus($galleryStatus)
    {
        $this->galleryStatus = $galleryStatus;
    }

    /**
     * @return mixed
     */
    public function getGalleryStatus()
    {
        return $this->galleryStatus;
    }

    /**
     * @param mixed $galleryType
     */
    public function setGalleryType($galleryType)
    {
        $this->galleryType = $galleryType;
    }

    /**
     * @return mixed
     */
    public function getGalleryType()
    {
        return $this->galleryType;
    }

    /**
     * @param mixed $galleryURL
     */
    public function setGalleryURL($galleryURL)
    {
        $this->galleryURL = $galleryURL;
    }

    /**
     * @return mixed
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }

    /**
     * @param mixed $photoDisplay
     */
    public function setPhotoDisplay($photoDisplay)
    {
        $this->photoDisplay = $photoDisplay;
    }

    /**
     * @return mixed
     */
    public function getPhotoDisplay()
    {
        return $this->photoDisplay;
    }

    /**
     * @param mixed $pictureSource
     */
    public function setPictureSource($pictureSource)
    {
        $this->pictureSource = $pictureSource;
    }

    /**
     * @return mixed
     */
    public function getPictureSource()
    {
        return $this->pictureSource;
    }

    /**
     * @param mixed $pictureURL
     */
    public function setPictureURL($pictureURL)
    {
        $this->pictureURL = $pictureURL;
    }

    /**
     * @return mixed
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }
}