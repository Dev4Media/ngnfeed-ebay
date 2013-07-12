<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/11/13 - 10:41 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model\Request;


class RelistItemRequest extends BaseRequest
{
    protected $item;
    protected $deletedField;

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
}