<?php

namespace D4m\NgnFeed\Ebay\Model;

class Item extends Entity
{
    protected $applicationData;
    protected $attributeSetArray;
    protected $attributeArray;
    protected $lookupAttributeArray;
    protected $autoPay;
    protected $paymentDetails;
    protected $biddingDetails;
    protected $motorsGermanySearchable;
    protected $buyerProtection;
    protected $buyItNowPrice;
    protected $categoryMappingAllowed;
    protected $charity;
    protected $country;
    protected $crossPromotion;
    protected $currency;
    protected $description;
    protected $descriptionReviseMode;
    protected $distance;
    protected $giftIcon;
    protected $giftServices;
    protected $hitCounter;
    protected $itemID;
    protected $listingDetails;
    protected $listingDesigner;
    protected $listingDuration;
    protected $listingEnhancement;
    protected $listingType;
    protected $location;
    protected $lotSize;
    protected $partnerCode;
    protected $partnerName;
    protected $paymentMethods;
    protected $payPalEmailAddress;
    protected $primaryCategory;
    protected $privateListing;
    protected $productListingDetails;
    protected $quantity;
    protected $privateNotes;
    protected $regionID;
    protected $relistLink;
    protected $reservePrice;
    protected $reviseStatus;
    protected $scheduleTime;
    protected $secondaryCategory;
    protected $freeAddedCategory;
    protected $seller;
    protected $sellingStatus;
    protected $shippingDetails;
    protected $shipToLocations;
    protected $site;
    protected $startPrice;
    protected $storefront;
    protected $subTitle;
    protected $timeLeft;
    protected $title;
    protected $uuid;
    protected $vatDetails;
    protected $sellerVacationNote;
    protected $watchCount;
    protected $hitCount;
    protected $disableBuyerRequirements;
    protected $bestOfferDetails;
    protected $locationDefaulted;
    protected $thirdPartyCheckout;
    protected $useTaxTable;
    protected $getItFast;
    protected $buyerResponsibleForShipping;
    protected $limitedWarrantyEligible;
    protected $eBayNotes;
    protected $questionCount;
    protected $relisted;
    protected $quantityAvailable;
    protected $sku;
    protected $categoryBasedAttributesPrefill;
    protected $searchDetails;
    protected $postalCode;
    protected $shippingTermsInDescription;
    protected $externalProductID;
    protected $sellerInventoryID;
    protected $pictureDetails;
    protected $dispatchTimeMax;
    protected $skypeEnabled;
    protected $skypeID;
    protected $skypeContactOption;
    protected $bestOfferEnabled;
    protected $localListing;
    protected $thirdPartyCheckoutIntegration;
    protected $listingCheckoutRedirectPreference;
    protected $sellerContactDetails;
    protected $totalQuestionCount;
    protected $proxyItem;
    protected $extendedSellerContactDetails;
    protected $leadCount;
    protected $newLeadCount;
    protected $itemSpecifics;
    protected $groupCategoryID;
    protected $classifiedAdPayPerLeadFee;
    protected $bidGroupItem;
    protected $applyBuyerProtection;
    protected $listingSubtype2;
    protected $mechanicalCheckAccepted;
    protected $updateSellerInfo;
    protected $updateReturnPolicy;
    protected $itemPolicyViolation;
    protected $crossBorderTrade;
    protected $businessSellerDetails;
    protected $buyerGuaranteePrice;
    protected $buyerRequirementDetails;
    protected $returnPolicy;
    protected $paymentAllowedSite;
    protected $inventoryTrackingMethod;
    protected $integratedMerchantCreditCardEnabled;
    protected $variations;
    protected $itemCompatibilityList;
    protected $itemCompatibilityCount;
    protected $conditionID;
    protected $conditionDescription;
    protected $conditionDisplayName;
    protected $taxCategory;
    protected $quantityAvailableHint;
    protected $quantityThreshold;
    protected $postCheckoutExperienceEnabled;
    protected $discountPriceInfo;
    protected $useRecommendedProduct;
    protected $sellerProvidedTitle;
    protected $vin;
    protected $vinLink;
    protected $vrm;
    protected $vrmLink;
    protected $quantityInfo;
    protected $sellerProfiles;
    protected $shippingPackageDetails;
    protected $topRatedListing;
    protected $floorPrice;
    protected $ceilingPrice;
    protected $quantityRestrictionPerBuyer;
    protected $isIntermediatedShippingEligible;
    protected $unitInfo;
    protected $relistParentID;
    protected $conditionDefinition;
    protected $hideFromSearch;
    protected $reasonHideFromSearch;
    protected $includeRecommendations;
    protected $outOfStockControl;
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
     * @param mixed $applicationData
     */
    public function setApplicationData($applicationData)
    {
        $this->applicationData = $applicationData;
    }

    /**
     * @return mixed
     */
    public function getApplicationData()
    {
        return $this->applicationData;
    }

    /**
     * @param mixed $applyBuyerProtection
     */
    public function setApplyBuyerProtection($applyBuyerProtection)
    {
        $this->applyBuyerProtection = $applyBuyerProtection;
    }

    /**
     * @return mixed
     */
    public function getApplyBuyerProtection()
    {
        return $this->applyBuyerProtection;
    }

    /**
     * @param mixed $attributeArray
     */
    public function setAttributeArray($attributeArray)
    {
        $this->attributeArray = $attributeArray;
    }

    /**
     * @return mixed
     */
    public function getAttributeArray()
    {
        return $this->attributeArray;
    }

    /**
     * @param mixed $attributeSetArray
     */
    public function setAttributeSetArray($attributeSetArray)
    {
        $this->attributeSetArray = $attributeSetArray;
    }

    /**
     * @return mixed
     */
    public function getAttributeSetArray()
    {
        return $this->attributeSetArray;
    }

    /**
     * @param mixed $autoPay
     */
    public function setAutoPay($autoPay)
    {
        $this->autoPay = $autoPay;
    }

    /**
     * @return mixed
     */
    public function getAutoPay()
    {
        return $this->autoPay;
    }

    /**
     * @param mixed $bestOfferDetails
     */
    public function setBestOfferDetails($bestOfferDetails)
    {
        $this->bestOfferDetails = $bestOfferDetails;
    }

    /**
     * @return mixed
     */
    public function getBestOfferDetails()
    {
        return $this->bestOfferDetails;
    }

    /**
     * @param mixed $bestOfferEnabled
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
    }

    /**
     * @return mixed
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * @param mixed $biddingDetails
     */
    public function setBiddingDetails($biddingDetails)
    {
        $this->biddingDetails = $biddingDetails;
    }

    /**
     * @return mixed
     */
    public function getBiddingDetails()
    {
        return $this->biddingDetails;
    }

    /**
     * @param mixed $bidGroupItem
     */
    public function setBidGroupItem($bidGroupItem)
    {
        $this->bidGroupItem = $bidGroupItem;
    }

    /**
     * @return mixed
     */
    public function getBidGroupItem()
    {
        return $this->bidGroupItem;
    }

    /**
     * @param mixed $businessSellerDetails
     */
    public function setBusinessSellerDetails($businessSellerDetails)
    {
        $this->businessSellerDetails = $businessSellerDetails;
    }

    /**
     * @return mixed
     */
    public function getBusinessSellerDetails()
    {
        return $this->businessSellerDetails;
    }

    /**
     * @param mixed $buyerGuaranteePrice
     */
    public function setBuyerGuaranteePrice($buyerGuaranteePrice)
    {
        $this->buyerGuaranteePrice = $buyerGuaranteePrice;
    }

    /**
     * @return mixed
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->buyerGuaranteePrice;
    }

    /**
     * @param mixed $buyerProtection
     */
    public function setBuyerProtection($buyerProtection)
    {
        $this->buyerProtection = $buyerProtection;
    }

    /**
     * @return mixed
     */
    public function getBuyerProtection()
    {
        return $this->buyerProtection;
    }

    /**
     * @param mixed $buyerRequirementDetails
     */
    public function setBuyerRequirementDetails($buyerRequirementDetails)
    {
        $this->buyerRequirementDetails = $buyerRequirementDetails;
    }

    /**
     * @return mixed
     */
    public function getBuyerRequirementDetails()
    {
        return $this->buyerRequirementDetails;
    }

    /**
     * @param mixed $buyerResponsibleForShipping
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping)
    {
        $this->buyerResponsibleForShipping = $buyerResponsibleForShipping;
    }

    /**
     * @return mixed
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->buyerResponsibleForShipping;
    }

    /**
     * @param mixed $buyItNowPrice
     */
    public function setBuyItNowPrice($buyItNowPrice)
    {
        $this->buyItNowPrice = $buyItNowPrice;
    }

    /**
     * @return mixed
     */
    public function getBuyItNowPrice()
    {
        return $this->buyItNowPrice;
    }

    /**
     * @param mixed $categoryBasedAttributesPrefill
     */
    public function setCategoryBasedAttributesPrefill($categoryBasedAttributesPrefill)
    {
        $this->categoryBasedAttributesPrefill = $categoryBasedAttributesPrefill;
    }

    /**
     * @return mixed
     */
    public function getCategoryBasedAttributesPrefill()
    {
        return $this->categoryBasedAttributesPrefill;
    }

    /**
     * @param mixed $categoryMappingAllowed
     */
    public function setCategoryMappingAllowed($categoryMappingAllowed)
    {
        $this->categoryMappingAllowed = $categoryMappingAllowed;
    }

    /**
     * @return mixed
     */
    public function getCategoryMappingAllowed()
    {
        return $this->categoryMappingAllowed;
    }

    /**
     * @param mixed $ceilingPrice
     */
    public function setCeilingPrice($ceilingPrice)
    {
        $this->ceilingPrice = $ceilingPrice;
    }

    /**
     * @return mixed
     */
    public function getCeilingPrice()
    {
        return $this->ceilingPrice;
    }

    /**
     * @param mixed $charity
     */
    public function setCharity($charity)
    {
        $this->charity = $charity;
    }

    /**
     * @return mixed
     */
    public function getCharity()
    {
        return $this->charity;
    }

    /**
     * @param mixed $classifiedAdPayPerLeadFee
     */
    public function setClassifiedAdPayPerLeadFee($classifiedAdPayPerLeadFee)
    {
        $this->classifiedAdPayPerLeadFee = $classifiedAdPayPerLeadFee;
    }

    /**
     * @return mixed
     */
    public function getClassifiedAdPayPerLeadFee()
    {
        return $this->classifiedAdPayPerLeadFee;
    }

    /**
     * @param mixed $conditionDefinition
     */
    public function setConditionDefinition($conditionDefinition)
    {
        $this->conditionDefinition = $conditionDefinition;
    }

    /**
     * @return mixed
     */
    public function getConditionDefinition()
    {
        return $this->conditionDefinition;
    }

    /**
     * @param mixed $conditionDescription
     */
    public function setConditionDescription($conditionDescription)
    {
        $this->conditionDescription = $conditionDescription;
    }

    /**
     * @return mixed
     */
    public function getConditionDescription()
    {
        return $this->conditionDescription;
    }

    /**
     * @param mixed $conditionDisplayName
     */
    public function setConditionDisplayName($conditionDisplayName)
    {
        $this->conditionDisplayName = $conditionDisplayName;
    }

    /**
     * @return mixed
     */
    public function getConditionDisplayName()
    {
        return $this->conditionDisplayName;
    }

    /**
     * @param mixed $conditionID
     */
    public function setConditionID($conditionID)
    {
        $this->conditionID = $conditionID;
    }

    /**
     * @return mixed
     */
    public function getConditionID()
    {
        return $this->conditionID;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $crossBorderTrade
     */
    public function setCrossBorderTrade($crossBorderTrade)
    {
        $this->crossBorderTrade = $crossBorderTrade;
    }

    /**
     * @return mixed
     */
    public function getCrossBorderTrade()
    {
        return $this->crossBorderTrade;
    }

    /**
     * @param mixed $crossPromotion
     */
    public function setCrossPromotion($crossPromotion)
    {
        $this->crossPromotion = $crossPromotion;
    }

    /**
     * @return mixed
     */
    public function getCrossPromotion()
    {
        return $this->crossPromotion;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $descriptionReviseMode
     */
    public function setDescriptionReviseMode($descriptionReviseMode)
    {
        $this->descriptionReviseMode = $descriptionReviseMode;
    }

    /**
     * @return mixed
     */
    public function getDescriptionReviseMode()
    {
        return $this->descriptionReviseMode;
    }

    /**
     * @param mixed $disableBuyerRequirements
     */
    public function setDisableBuyerRequirements($disableBuyerRequirements)
    {
        $this->disableBuyerRequirements = $disableBuyerRequirements;
    }

    /**
     * @return mixed
     */
    public function getDisableBuyerRequirements()
    {
        return $this->disableBuyerRequirements;
    }

    /**
     * @param mixed $discountPriceInfo
     */
    public function setDiscountPriceInfo($discountPriceInfo)
    {
        $this->discountPriceInfo = $discountPriceInfo;
    }

    /**
     * @return mixed
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }

    /**
     * @param mixed $dispatchTimeMax
     */
    public function setDispatchTimeMax($dispatchTimeMax)
    {
        $this->dispatchTimeMax = $dispatchTimeMax;
    }

    /**
     * @return mixed
     */
    public function getDispatchTimeMax()
    {
        return $this->dispatchTimeMax;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $eBayNotes
     */
    public function setEBayNotes($eBayNotes)
    {
        $this->eBayNotes = $eBayNotes;
    }

    /**
     * @return mixed
     */
    public function getEBayNotes()
    {
        return $this->eBayNotes;
    }

    /**
     * @param mixed $extendedSellerContactDetails
     */
    public function setExtendedSellerContactDetails($extendedSellerContactDetails)
    {
        $this->extendedSellerContactDetails = $extendedSellerContactDetails;
    }

    /**
     * @return mixed
     */
    public function getExtendedSellerContactDetails()
    {
        return $this->extendedSellerContactDetails;
    }

    /**
     * @param mixed $externalProductID
     */
    public function setExternalProductID($externalProductID)
    {
        $this->externalProductID = $externalProductID;
    }

    /**
     * @return mixed
     */
    public function getExternalProductID()
    {
        return $this->externalProductID;
    }

    /**
     * @param mixed $floorPrice
     */
    public function setFloorPrice($floorPrice)
    {
        $this->floorPrice = $floorPrice;
    }

    /**
     * @return mixed
     */
    public function getFloorPrice()
    {
        return $this->floorPrice;
    }

    /**
     * @param mixed $freeAddedCategory
     */
    public function setFreeAddedCategory($freeAddedCategory)
    {
        $this->freeAddedCategory = $freeAddedCategory;
    }

    /**
     * @return mixed
     */
    public function getFreeAddedCategory()
    {
        return $this->freeAddedCategory;
    }

    /**
     * @param mixed $getItFast
     */
    public function setGetItFast($getItFast)
    {
        $this->getItFast = $getItFast;
    }

    /**
     * @return mixed
     */
    public function getGetItFast()
    {
        return $this->getItFast;
    }

    /**
     * @param mixed $giftIcon
     */
    public function setGiftIcon($giftIcon)
    {
        $this->giftIcon = $giftIcon;
    }

    /**
     * @return mixed
     */
    public function getGiftIcon()
    {
        return $this->giftIcon;
    }

    /**
     * @param mixed $giftServices
     */
    public function setGiftServices($giftServices)
    {
        $this->giftServices = $giftServices;
    }

    /**
     * @return mixed
     */
    public function getGiftServices()
    {
        return $this->giftServices;
    }

    /**
     * @param mixed $groupCategoryID
     */
    public function setGroupCategoryID($groupCategoryID)
    {
        $this->groupCategoryID = $groupCategoryID;
    }

    /**
     * @return mixed
     */
    public function getGroupCategoryID()
    {
        return $this->groupCategoryID;
    }

    /**
     * @param mixed $hideFromSearch
     */
    public function setHideFromSearch($hideFromSearch)
    {
        $this->hideFromSearch = $hideFromSearch;
    }

    /**
     * @return mixed
     */
    public function getHideFromSearch()
    {
        return $this->hideFromSearch;
    }

    /**
     * @param mixed $hitCount
     */
    public function setHitCount($hitCount)
    {
        $this->hitCount = $hitCount;
    }

    /**
     * @return mixed
     */
    public function getHitCount()
    {
        return $this->hitCount;
    }

    /**
     * @param mixed $hitCounter
     */
    public function setHitCounter($hitCounter)
    {
        $this->hitCounter = $hitCounter;
    }

    /**
     * @return mixed
     */
    public function getHitCounter()
    {
        return $this->hitCounter;
    }

    /**
     * @param mixed $includeRecommendations
     */
    public function setIncludeRecommendations($includeRecommendations)
    {
        $this->includeRecommendations = $includeRecommendations;
    }

    /**
     * @return mixed
     */
    public function getIncludeRecommendations()
    {
        return $this->includeRecommendations;
    }

    /**
     * @param mixed $integratedMerchantCreditCardEnabled
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
    {
        $this->integratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
    }

    /**
     * @return mixed
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->integratedMerchantCreditCardEnabled;
    }

    /**
     * @param mixed $inventoryTrackingMethod
     */
    public function setInventoryTrackingMethod($inventoryTrackingMethod)
    {
        $this->inventoryTrackingMethod = $inventoryTrackingMethod;
    }

    /**
     * @return mixed
     */
    public function getInventoryTrackingMethod()
    {
        return $this->inventoryTrackingMethod;
    }

    /**
     * @param mixed $isIntermediatedShippingEligible
     */
    public function setIsIntermediatedShippingEligible($isIntermediatedShippingEligible)
    {
        $this->isIntermediatedShippingEligible = $isIntermediatedShippingEligible;
    }

    /**
     * @return mixed
     */
    public function getIsIntermediatedShippingEligible()
    {
        return $this->isIntermediatedShippingEligible;
    }

    /**
     * @param mixed $itemCompatibilityCount
     */
    public function setItemCompatibilityCount($itemCompatibilityCount)
    {
        $this->itemCompatibilityCount = $itemCompatibilityCount;
    }

    /**
     * @return mixed
     */
    public function getItemCompatibilityCount()
    {
        return $this->itemCompatibilityCount;
    }

    /**
     * @param mixed $itemCompatibilityList
     */
    public function setItemCompatibilityList($itemCompatibilityList)
    {
        $this->itemCompatibilityList = $itemCompatibilityList;
    }

    /**
     * @return mixed
     */
    public function getItemCompatibilityList()
    {
        return $this->itemCompatibilityList;
    }

    /**
     * @param mixed $itemID
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    /**
     * @return mixed
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * @param mixed $itemPolicyViolation
     */
    public function setItemPolicyViolation($itemPolicyViolation)
    {
        $this->itemPolicyViolation = $itemPolicyViolation;
    }

    /**
     * @return mixed
     */
    public function getItemPolicyViolation()
    {
        return $this->itemPolicyViolation;
    }

    /**
     * @param mixed $itemSpecifics
     */
    public function setItemSpecifics($itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
    }

    /**
     * @return mixed
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * @param mixed $leadCount
     */
    public function setLeadCount($leadCount)
    {
        $this->leadCount = $leadCount;
    }

    /**
     * @return mixed
     */
    public function getLeadCount()
    {
        return $this->leadCount;
    }

    /**
     * @param mixed $limitedWarrantyEligible
     */
    public function setLimitedWarrantyEligible($limitedWarrantyEligible)
    {
        $this->limitedWarrantyEligible = $limitedWarrantyEligible;
    }

    /**
     * @return mixed
     */
    public function getLimitedWarrantyEligible()
    {
        return $this->limitedWarrantyEligible;
    }

    /**
     * @param mixed $listingCheckoutRedirectPreference
     */
    public function setListingCheckoutRedirectPreference($listingCheckoutRedirectPreference)
    {
        $this->listingCheckoutRedirectPreference = $listingCheckoutRedirectPreference;
    }

    /**
     * @return mixed
     */
    public function getListingCheckoutRedirectPreference()
    {
        return $this->listingCheckoutRedirectPreference;
    }

    /**
     * @param mixed $listingDesigner
     */
    public function setListingDesigner($listingDesigner)
    {
        $this->listingDesigner = $listingDesigner;
    }

    /**
     * @return mixed
     */
    public function getListingDesigner()
    {
        return $this->listingDesigner;
    }

    /**
     * @param mixed $listingDetails
     */
    public function setListingDetails($listingDetails)
    {
        $this->listingDetails = $listingDetails;
    }

    /**
     * @return mixed
     */
    public function getListingDetails()
    {
        return $this->listingDetails;
    }

    /**
     * @param mixed $listingDuration
     */
    public function setListingDuration($listingDuration)
    {
        $this->listingDuration = $listingDuration;
    }

    /**
     * @return mixed
     */
    public function getListingDuration()
    {
        return $this->listingDuration;
    }

    /**
     * @param mixed $listingEnhancement
     */
    public function setListingEnhancement($listingEnhancement)
    {
        $this->listingEnhancement = $listingEnhancement;
    }

    /**
     * @return mixed
     */
    public function getListingEnhancement()
    {
        return $this->listingEnhancement;
    }

    /**
     * @param mixed $listingSubtype2
     */
    public function setListingSubtype2($listingSubtype2)
    {
        $this->listingSubtype2 = $listingSubtype2;
    }

    /**
     * @return mixed
     */
    public function getListingSubtype2()
    {
        return $this->listingSubtype2;
    }

    /**
     * @param mixed $listingType
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
    }

    /**
     * @return mixed
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * @param mixed $localListing
     */
    public function setLocalListing($localListing)
    {
        $this->localListing = $localListing;
    }

    /**
     * @return mixed
     */
    public function getLocalListing()
    {
        return $this->localListing;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $locationDefaulted
     */
    public function setLocationDefaulted($locationDefaulted)
    {
        $this->locationDefaulted = $locationDefaulted;
    }

    /**
     * @return mixed
     */
    public function getLocationDefaulted()
    {
        return $this->locationDefaulted;
    }

    /**
     * @param mixed $lookupAttributeArray
     */
    public function setLookupAttributeArray($lookupAttributeArray)
    {
        $this->lookupAttributeArray = $lookupAttributeArray;
    }

    /**
     * @return mixed
     */
    public function getLookupAttributeArray()
    {
        return $this->lookupAttributeArray;
    }

    /**
     * @param mixed $lotSize
     */
    public function setLotSize($lotSize)
    {
        $this->lotSize = $lotSize;
    }

    /**
     * @return mixed
     */
    public function getLotSize()
    {
        return $this->lotSize;
    }

    /**
     * @param mixed $mechanicalCheckAccepted
     */
    public function setMechanicalCheckAccepted($mechanicalCheckAccepted)
    {
        $this->mechanicalCheckAccepted = $mechanicalCheckAccepted;
    }

    /**
     * @return mixed
     */
    public function getMechanicalCheckAccepted()
    {
        return $this->mechanicalCheckAccepted;
    }

    /**
     * @param mixed $motorsGermanySearchable
     */
    public function setMotorsGermanySearchable($motorsGermanySearchable)
    {
        $this->motorsGermanySearchable = $motorsGermanySearchable;
    }

    /**
     * @return mixed
     */
    public function getMotorsGermanySearchable()
    {
        return $this->motorsGermanySearchable;
    }

    /**
     * @param mixed $newLeadCount
     */
    public function setNewLeadCount($newLeadCount)
    {
        $this->newLeadCount = $newLeadCount;
    }

    /**
     * @return mixed
     */
    public function getNewLeadCount()
    {
        return $this->newLeadCount;
    }

    /**
     * @param mixed $outOfStockControl
     */
    public function setOutOfStockControl($outOfStockControl)
    {
        $this->outOfStockControl = $outOfStockControl;
    }

    /**
     * @return mixed
     */
    public function getOutOfStockControl()
    {
        return $this->outOfStockControl;
    }

    /**
     * @param mixed $partnerCode
     */
    public function setPartnerCode($partnerCode)
    {
        $this->partnerCode = $partnerCode;
    }

    /**
     * @return mixed
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * @param mixed $partnerName
     */
    public function setPartnerName($partnerName)
    {
        $this->partnerName = $partnerName;
    }

    /**
     * @return mixed
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }

    /**
     * @param mixed $paymentAllowedSite
     */
    public function setPaymentAllowedSite($paymentAllowedSite)
    {
        $this->paymentAllowedSite = $paymentAllowedSite;
    }

    /**
     * @return mixed
     */
    public function getPaymentAllowedSite()
    {
        return $this->paymentAllowedSite;
    }

    /**
     * @param mixed $paymentDetails
     */
    public function setPaymentDetails($paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
    }

    /**
     * @return mixed
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * @param mixed $paymentMethods
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param mixed $payPalEmailAddress
     */
    public function setPayPalEmailAddress($payPalEmailAddress)
    {
        $this->payPalEmailAddress = $payPalEmailAddress;
    }

    /**
     * @return mixed
     */
    public function getPayPalEmailAddress()
    {
        return $this->payPalEmailAddress;
    }

    /**
     * @param mixed $pictureDetails
     */
    public function setPictureDetails($pictureDetails)
    {
        $this->pictureDetails = $pictureDetails;
    }

    /**
     * @return mixed
     */
    public function getPictureDetails()
    {
        return $this->pictureDetails;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postCheckoutExperienceEnabled
     */
    public function setPostCheckoutExperienceEnabled($postCheckoutExperienceEnabled)
    {
        $this->postCheckoutExperienceEnabled = $postCheckoutExperienceEnabled;
    }

    /**
     * @return mixed
     */
    public function getPostCheckoutExperienceEnabled()
    {
        return $this->postCheckoutExperienceEnabled;
    }

    /**
     * @param mixed $primaryCategory
     */
    public function setPrimaryCategory($primaryCategory)
    {
        $this->primaryCategory = $primaryCategory;
    }

    /**
     * @return mixed
     */
    public function getPrimaryCategory()
    {
        return $this->primaryCategory;
    }

    /**
     * @param mixed $privateListing
     */
    public function setPrivateListing($privateListing)
    {
        $this->privateListing = $privateListing;
    }

    /**
     * @return mixed
     */
    public function getPrivateListing()
    {
        return $this->privateListing;
    }

    /**
     * @param mixed $privateNotes
     */
    public function setPrivateNotes($privateNotes)
    {
        $this->privateNotes = $privateNotes;
    }

    /**
     * @return mixed
     */
    public function getPrivateNotes()
    {
        return $this->privateNotes;
    }

    /**
     * @param mixed $productListingDetails
     */
    public function setProductListingDetails($productListingDetails)
    {
        $this->productListingDetails = $productListingDetails;
    }

    /**
     * @return mixed
     */
    public function getProductListingDetails()
    {
        return $this->productListingDetails;
    }

    /**
     * @param mixed $proxyItem
     */
    public function setProxyItem($proxyItem)
    {
        $this->proxyItem = $proxyItem;
    }

    /**
     * @return mixed
     */
    public function getProxyItem()
    {
        return $this->proxyItem;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantityAvailable
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->quantityAvailable = $quantityAvailable;
    }

    /**
     * @return mixed
     */
    public function getQuantityAvailable()
    {
        return $this->quantityAvailable;
    }

    /**
     * @param mixed $quantityAvailableHint
     */
    public function setQuantityAvailableHint($quantityAvailableHint)
    {
        $this->quantityAvailableHint = $quantityAvailableHint;
    }

    /**
     * @return mixed
     */
    public function getQuantityAvailableHint()
    {
        return $this->quantityAvailableHint;
    }

    /**
     * @param mixed $quantityInfo
     */
    public function setQuantityInfo($quantityInfo)
    {
        $this->quantityInfo = $quantityInfo;
    }

    /**
     * @return mixed
     */
    public function getQuantityInfo()
    {
        return $this->quantityInfo;
    }

    /**
     * @param mixed $quantityRestrictionPerBuyer
     */
    public function setQuantityRestrictionPerBuyer($quantityRestrictionPerBuyer)
    {
        $this->quantityRestrictionPerBuyer = $quantityRestrictionPerBuyer;
    }

    /**
     * @return mixed
     */
    public function getQuantityRestrictionPerBuyer()
    {
        return $this->quantityRestrictionPerBuyer;
    }

    /**
     * @param mixed $quantityThreshold
     */
    public function setQuantityThreshold($quantityThreshold)
    {
        $this->quantityThreshold = $quantityThreshold;
    }

    /**
     * @return mixed
     */
    public function getQuantityThreshold()
    {
        return $this->quantityThreshold;
    }

    /**
     * @param mixed $questionCount
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;
    }

    /**
     * @return mixed
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * @param mixed $reasonHideFromSearch
     */
    public function setReasonHideFromSearch($reasonHideFromSearch)
    {
        $this->reasonHideFromSearch = $reasonHideFromSearch;
    }

    /**
     * @return mixed
     */
    public function getReasonHideFromSearch()
    {
        return $this->reasonHideFromSearch;
    }

    /**
     * @param mixed $regionID
     */
    public function setRegionID($regionID)
    {
        $this->regionID = $regionID;
    }

    /**
     * @return mixed
     */
    public function getRegionID()
    {
        return $this->regionID;
    }

    /**
     * @param mixed $relisted
     */
    public function setRelisted($relisted)
    {
        $this->relisted = $relisted;
    }

    /**
     * @return mixed
     */
    public function getRelisted()
    {
        return $this->relisted;
    }

    /**
     * @param mixed $relistLink
     */
    public function setRelistLink($relistLink)
    {
        $this->relistLink = $relistLink;
    }

    /**
     * @return mixed
     */
    public function getRelistLink()
    {
        return $this->relistLink;
    }

    /**
     * @param mixed $relistParentID
     */
    public function setRelistParentID($relistParentID)
    {
        $this->relistParentID = $relistParentID;
    }

    /**
     * @return mixed
     */
    public function getRelistParentID()
    {
        return $this->relistParentID;
    }

    /**
     * @param mixed $reservePrice
     */
    public function setReservePrice($reservePrice)
    {
        $this->reservePrice = $reservePrice;
    }

    /**
     * @return mixed
     */
    public function getReservePrice()
    {
        return $this->reservePrice;
    }

    /**
     * @param mixed $returnPolicy
     */
    public function setReturnPolicy($returnPolicy)
    {
        $this->returnPolicy = $returnPolicy;
    }

    /**
     * @return mixed
     */
    public function getReturnPolicy()
    {
        return $this->returnPolicy;
    }

    /**
     * @param mixed $reviseStatus
     */
    public function setReviseStatus($reviseStatus)
    {
        $this->reviseStatus = $reviseStatus;
    }

    /**
     * @return mixed
     */
    public function getReviseStatus()
    {
        return $this->reviseStatus;
    }

    /**
     * @param mixed $scheduleTime
     */
    public function setScheduleTime($scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
    }

    /**
     * @return mixed
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime;
    }

    /**
     * @param mixed $searchDetails
     */
    public function setSearchDetails($searchDetails)
    {
        $this->searchDetails = $searchDetails;
    }

    /**
     * @return mixed
     */
    public function getSearchDetails()
    {
        return $this->searchDetails;
    }

    /**
     * @param mixed $secondaryCategory
     */
    public function setSecondaryCategory($secondaryCategory)
    {
        $this->secondaryCategory = $secondaryCategory;
    }

    /**
     * @return mixed
     */
    public function getSecondaryCategory()
    {
        return $this->secondaryCategory;
    }

    /**
     * @param mixed $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return mixed
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param mixed $sellerContactDetails
     */
    public function setSellerContactDetails($sellerContactDetails)
    {
        $this->sellerContactDetails = $sellerContactDetails;
    }

    /**
     * @return mixed
     */
    public function getSellerContactDetails()
    {
        return $this->sellerContactDetails;
    }

    /**
     * @param mixed $sellerInventoryID
     */
    public function setSellerInventoryID($sellerInventoryID)
    {
        $this->sellerInventoryID = $sellerInventoryID;
    }

    /**
     * @return mixed
     */
    public function getSellerInventoryID()
    {
        return $this->sellerInventoryID;
    }

    /**
     * @param mixed $sellerProfiles
     */
    public function setSellerProfiles($sellerProfiles)
    {
        $this->sellerProfiles = $sellerProfiles;
    }

    /**
     * @return mixed
     */
    public function getSellerProfiles()
    {
        return $this->sellerProfiles;
    }

    /**
     * @param mixed $sellerProvidedTitle
     */
    public function setSellerProvidedTitle($sellerProvidedTitle)
    {
        $this->sellerProvidedTitle = $sellerProvidedTitle;
    }

    /**
     * @return mixed
     */
    public function getSellerProvidedTitle()
    {
        return $this->sellerProvidedTitle;
    }

    /**
     * @param mixed $sellerVacationNote
     */
    public function setSellerVacationNote($sellerVacationNote)
    {
        $this->sellerVacationNote = $sellerVacationNote;
    }

    /**
     * @return mixed
     */
    public function getSellerVacationNote()
    {
        return $this->sellerVacationNote;
    }

    /**
     * @param mixed $sellingStatus
     */
    public function setSellingStatus($sellingStatus)
    {
        $this->sellingStatus = $sellingStatus;
    }

    /**
     * @return mixed
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }

    /**
     * @param mixed $shippingDetails
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * @return mixed
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param mixed $shippingPackageDetails
     */
    public function setShippingPackageDetails($shippingPackageDetails)
    {
        $this->shippingPackageDetails = $shippingPackageDetails;
    }

    /**
     * @return mixed
     */
    public function getShippingPackageDetails()
    {
        return $this->shippingPackageDetails;
    }

    /**
     * @param mixed $shippingTermsInDescription
     */
    public function setShippingTermsInDescription($shippingTermsInDescription)
    {
        $this->shippingTermsInDescription = $shippingTermsInDescription;
    }

    /**
     * @return mixed
     */
    public function getShippingTermsInDescription()
    {
        return $this->shippingTermsInDescription;
    }

    /**
     * @param mixed $shipToLocations
     */
    public function setShipToLocations($shipToLocations)
    {
        $this->shipToLocations = $shipToLocations;
    }

    /**
     * @return mixed
     */
    public function getShipToLocations()
    {
        return $this->shipToLocations;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $skypeContactOption
     */
    public function setSkypeContactOption($skypeContactOption)
    {
        $this->skypeContactOption = $skypeContactOption;
    }

    /**
     * @return mixed
     */
    public function getSkypeContactOption()
    {
        return $this->skypeContactOption;
    }

    /**
     * @param mixed $skypeEnabled
     */
    public function setSkypeEnabled($skypeEnabled)
    {
        $this->skypeEnabled = $skypeEnabled;
    }

    /**
     * @return mixed
     */
    public function getSkypeEnabled()
    {
        return $this->skypeEnabled;
    }

    /**
     * @param mixed $skypeID
     */
    public function setSkypeID($skypeID)
    {
        $this->skypeID = $skypeID;
    }

    /**
     * @return mixed
     */
    public function getSkypeID()
    {
        return $this->skypeID;
    }

    /**
     * @param mixed $startPrice
     */
    public function setStartPrice($startPrice)
    {
        $this->startPrice = $startPrice;
    }

    /**
     * @return mixed
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * @param mixed $storefront
     */
    public function setStorefront($storefront)
    {
        $this->storefront = $storefront;
    }

    /**
     * @return mixed
     */
    public function getStorefront()
    {
        return $this->storefront;
    }

    /**
     * @param mixed $subTitle
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    }

    /**
     * @return mixed
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * @param mixed $taxCategory
     */
    public function setTaxCategory($taxCategory)
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @return mixed
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * @param mixed $thirdPartyCheckout
     */
    public function setThirdPartyCheckout($thirdPartyCheckout)
    {
        $this->thirdPartyCheckout = $thirdPartyCheckout;
    }

    /**
     * @return mixed
     */
    public function getThirdPartyCheckout()
    {
        return $this->thirdPartyCheckout;
    }

    /**
     * @param mixed $thirdPartyCheckoutIntegration
     */
    public function setThirdPartyCheckoutIntegration($thirdPartyCheckoutIntegration)
    {
        $this->thirdPartyCheckoutIntegration = $thirdPartyCheckoutIntegration;
    }

    /**
     * @return mixed
     */
    public function getThirdPartyCheckoutIntegration()
    {
        return $this->thirdPartyCheckoutIntegration;
    }

    /**
     * @param mixed $timeLeft
     */
    public function setTimeLeft($timeLeft)
    {
        $this->timeLeft = $timeLeft;
    }

    /**
     * @return mixed
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $topRatedListing
     */
    public function setTopRatedListing($topRatedListing)
    {
        $this->topRatedListing = $topRatedListing;
    }

    /**
     * @return mixed
     */
    public function getTopRatedListing()
    {
        return $this->topRatedListing;
    }

    /**
     * @param mixed $totalQuestionCount
     */
    public function setTotalQuestionCount($totalQuestionCount)
    {
        $this->totalQuestionCount = $totalQuestionCount;
    }

    /**
     * @return mixed
     */
    public function getTotalQuestionCount()
    {
        return $this->totalQuestionCount;
    }

    /**
     * @param mixed $unitInfo
     */
    public function setUnitInfo($unitInfo)
    {
        $this->unitInfo = $unitInfo;
    }

    /**
     * @return mixed
     */
    public function getUnitInfo()
    {
        return $this->unitInfo;
    }

    /**
     * @param mixed $updateReturnPolicy
     */
    public function setUpdateReturnPolicy($updateReturnPolicy)
    {
        $this->updateReturnPolicy = $updateReturnPolicy;
    }

    /**
     * @return mixed
     */
    public function getUpdateReturnPolicy()
    {
        return $this->updateReturnPolicy;
    }

    /**
     * @param mixed $updateSellerInfo
     */
    public function setUpdateSellerInfo($updateSellerInfo)
    {
        $this->updateSellerInfo = $updateSellerInfo;
    }

    /**
     * @return mixed
     */
    public function getUpdateSellerInfo()
    {
        return $this->updateSellerInfo;
    }

    /**
     * @param mixed $useRecommendedProduct
     */
    public function setUseRecommendedProduct($useRecommendedProduct)
    {
        $this->useRecommendedProduct = $useRecommendedProduct;
    }

    /**
     * @return mixed
     */
    public function getUseRecommendedProduct()
    {
        return $this->useRecommendedProduct;
    }

    /**
     * @param mixed $useTaxTable
     */
    public function setUseTaxTable($useTaxTable)
    {
        $this->useTaxTable = $useTaxTable;
    }

    /**
     * @return mixed
     */
    public function getUseTaxTable()
    {
        return $this->useTaxTable;
    }

    /**
     * @param mixed $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param mixed $variations
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;
    }

    /**
     * @return mixed
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param mixed $vatDetails
     */
    public function setVatDetails($vatDetails)
    {
        $this->vatDetails = $vatDetails;
    }

    /**
     * @return mixed
     */
    public function getVatDetails()
    {
        return $this->vatDetails;
    }

    /**
     * @param mixed $vin
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
    }

    /**
     * @return mixed
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * @param mixed $vinLink
     */
    public function setVinLink($vinLink)
    {
        $this->vinLink = $vinLink;
    }

    /**
     * @return mixed
     */
    public function getVinLink()
    {
        return $this->vinLink;
    }

    /**
     * @param mixed $vrm
     */
    public function setVrm($vrm)
    {
        $this->vrm = $vrm;
    }

    /**
     * @return mixed
     */
    public function getVrm()
    {
        return $this->vrm;
    }

    /**
     * @param mixed $vrmLink
     */
    public function setVrmLink($vrmLink)
    {
        $this->vrmLink = $vrmLink;
    }

    /**
     * @return mixed
     */
    public function getVrmLink()
    {
        return $this->vrmLink;
    }

    /**
     * @param mixed $watchCount
     */
    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
    }

    /**
     * @return mixed
     */
    public function getWatchCount()
    {
        return $this->watchCount;
    }

}
