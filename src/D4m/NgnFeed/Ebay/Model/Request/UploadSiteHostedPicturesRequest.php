<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class UploadSiteHostedPicturesRequest extends BaseRequest
{
    protected $pictureName;
    protected $pictureSystemVersion;
    protected $pictureSet;
    protected $pictureData;
    protected $pictureUploadPolicy;
    protected $externalPictureURL;
    protected $pictureWatermark;
    protected $extensionInDays;

    /**
     * @param mixed $extensionInDays
     */
    public function setExtensionInDays($extensionInDays)
    {
        $this->extensionInDays = $extensionInDays;
    }

    /**
     * @return mixed
     */
    public function getExtensionInDays()
    {
        return $this->extensionInDays;
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
     * @param mixed $pictureData
     */
    public function setPictureData($pictureData)
    {
        $this->pictureData = $pictureData;
    }

    /**
     * @return mixed
     */
    public function getPictureData()
    {
        return $this->pictureData;
    }

    /**
     * @param mixed $pictureName
     */
    public function setPictureName($pictureName)
    {
        $this->pictureName = $pictureName;
    }

    /**
     * @return mixed
     */
    public function getPictureName()
    {
        return $this->pictureName;
    }

    /**
     * @param mixed $pictureSet
     */
    public function setPictureSet($pictureSet)
    {
        $this->pictureSet = $pictureSet;
    }

    /**
     * @return mixed
     */
    public function getPictureSet()
    {
        return $this->pictureSet;
    }

    /**
     * @param mixed $pictureSystemVersion
     */
    public function setPictureSystemVersion($pictureSystemVersion)
    {
        $this->pictureSystemVersion = $pictureSystemVersion;
    }

    /**
     * @return mixed
     */
    public function getPictureSystemVersion()
    {
        return $this->pictureSystemVersion;
    }

    /**
     * @param mixed $pictureUploadPolicy
     */
    public function setPictureUploadPolicy($pictureUploadPolicy)
    {
        $this->pictureUploadPolicy = $pictureUploadPolicy;
    }

    /**
     * @return mixed
     */
    public function getPictureUploadPolicy()
    {
        return $this->pictureUploadPolicy;
    }

    /**
     * @param mixed $pictureWatermark
     */
    public function setPictureWatermark($pictureWatermark)
    {
        $this->pictureWatermark = $pictureWatermark;
    }

    /**
     * @return mixed
     */
    public function getPictureWatermark()
    {
        return $this->pictureWatermark;
    }
}