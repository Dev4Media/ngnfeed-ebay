<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/22/13 - 9:43 AM
 * 
 */

namespace D4m\NgnFeed\Ebay;


interface Ebay
{
    public function executeService($serviceName, $arguments);

}