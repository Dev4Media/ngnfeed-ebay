<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/6/13 - 12:02 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Service;

use D4m\NgnFeed\Ebay\Model\Request\UploadSiteHostedPicturesRequest;

class UploadSiteHostedPictures extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('UploadSiteHostedPictures');
        $this->options = $options;
    }
}