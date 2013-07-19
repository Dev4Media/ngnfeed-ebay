<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/19/13 - 3:13 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model\Enum;


class BuyerProtectionCode
{
    const ITEM_INELIGIBLE = "ItemIneligible";
    const ITEM_ELIGIBLE = "ItemEligible";
    const ITEM_MARKED_INELIGIBLE = "ItemMarkedIneligible";
    const ITEM_MARKED_ELIGIBLE = "ItemMarkedEligible";
    const NO_COVERAGE = "NoCoverage";
    const CUSTOM_CODE = "CustomCode";
}