<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/22/13 - 12:49 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Service;


interface ApiCall {

    public function setSession($session);
    public function execute();

}