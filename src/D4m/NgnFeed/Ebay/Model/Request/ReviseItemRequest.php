<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class ReviseItemRequest extends BaseRequest
{
    protected $item;
    protected $deletedField;
    protected $verifyOnly;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $deletedField
     */
    public function setDeletedField($deletedField)
    {
        $this->deletedField = $deletedField;
    }

    /**
     * @return mixed
     */
    public function getDeletedField()
    {
        return $this->deletedField;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $verifyOnly
     */
    public function setVerifyOnly($verifyOnly)
    {
        $this->verifyOnly = $verifyOnly;
    }

    /**
     * @return mixed
     */
    public function getVerifyOnly()
    {
        return $this->verifyOnly;
    }
}
