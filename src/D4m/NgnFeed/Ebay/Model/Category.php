<?php

namespace D4m\NgnFeed\Ebay\Model;

class Category extends Entity
{
    protected $bestOfferEnabled;
    protected $autoPayEnabled;
    protected $b2BVATEnabled;
    protected $catalogEnabled;
    protected $categoryID;
    protected $categoryLevel;
    protected $categoryName;
    protected $categoryParentID;
    protected $categoryParentName;
    protected $productSearchPageAvailable;
    protected $productFinderIDs;
    protected $characteristicsSets;
    protected $expired;
    protected $intlAutosFixedCat;
    protected $leafCategory;
    protected $virtual;
    protected $numOfItems;
    protected $sellerGuaranteeEligible;
    protected $orpa;
    protected $orra;
    protected $lsd;
    protected $keywords;
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
     * @param mixed $autoPayEnabled
     */
    public function setAutoPayEnabled($autoPayEnabled)
    {
        $this->autoPayEnabled = $autoPayEnabled;
    }

    /**
     * @return mixed
     */
    public function getAutoPayEnabled()
    {
        return $this->autoPayEnabled;
    }

    /**
     * @param mixed $b2BVATEnabled
     */
    public function setB2BVATEnabled($b2BVATEnabled)
    {
        $this->b2BVATEnabled = $b2BVATEnabled;
    }

    /**
     * @return mixed
     */
    public function getB2BVATEnabled()
    {
        return $this->b2BVATEnabled;
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
     * @param mixed $catalogEnabled
     */
    public function setCatalogEnabled($catalogEnabled)
    {
        $this->catalogEnabled = $catalogEnabled;
    }

    /**
     * @return mixed
     */
    public function getCatalogEnabled()
    {
        return $this->catalogEnabled;
    }

    /**
     * @param mixed $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @param mixed $categoryLevel
     */
    public function setCategoryLevel($categoryLevel)
    {
        $this->categoryLevel = $categoryLevel;
    }

    /**
     * @return mixed
     */
    public function getCategoryLevel()
    {
        return $this->categoryLevel;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryParentID
     */
    public function setCategoryParentID($categoryParentID)
    {
        $this->categoryParentID = $categoryParentID;
    }

    /**
     * @return mixed
     */
    public function getCategoryParentID()
    {
        return $this->categoryParentID;
    }

    /**
     * @param mixed $categoryParentName
     */
    public function setCategoryParentName($categoryParentName)
    {
        $this->categoryParentName = $categoryParentName;
    }

    /**
     * @return mixed
     */
    public function getCategoryParentName()
    {
        return $this->categoryParentName;
    }

    /**
     * @param mixed $characteristicsSets
     */
    public function setCharacteristicsSets($characteristicsSets)
    {
        $this->characteristicsSets = $characteristicsSets;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsSets()
    {
        return $this->characteristicsSets;
    }

    /**
     * @param mixed $expired
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
    }

    /**
     * @return mixed
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * @param mixed $intlAutosFixedCat
     */
    public function setIntlAutosFixedCat($intlAutosFixedCat)
    {
        $this->intlAutosFixedCat = $intlAutosFixedCat;
    }

    /**
     * @return mixed
     */
    public function getIntlAutosFixedCat()
    {
        return $this->intlAutosFixedCat;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $leafCategory
     */
    public function setLeafCategory($leafCategory)
    {
        $this->leafCategory = $leafCategory;
    }

    /**
     * @return mixed
     */
    public function getLeafCategory()
    {
        return $this->leafCategory;
    }

    /**
     * @param mixed $lsd
     */
    public function setLsd($lsd)
    {
        $this->lsd = $lsd;
    }

    /**
     * @return mixed
     */
    public function getLsd()
    {
        return $this->lsd;
    }

    /**
     * @param mixed $numOfItems
     */
    public function setNumOfItems($numOfItems)
    {
        $this->numOfItems = $numOfItems;
    }

    /**
     * @return mixed
     */
    public function getNumOfItems()
    {
        return $this->numOfItems;
    }

    /**
     * @param mixed $orpa
     */
    public function setOrpa($orpa)
    {
        $this->orpa = $orpa;
    }

    /**
     * @return mixed
     */
    public function getOrpa()
    {
        return $this->orpa;
    }

    /**
     * @param mixed $orra
     */
    public function setOrra($orra)
    {
        $this->orra = $orra;
    }

    /**
     * @return mixed
     */
    public function getOrra()
    {
        return $this->orra;
    }

    /**
     * @param mixed $productFinderIDs
     */
    public function setProductFinderIDs($productFinderIDs)
    {
        $this->productFinderIDs = $productFinderIDs;
    }

    /**
     * @return mixed
     */
    public function getProductFinderIDs()
    {
        return $this->productFinderIDs;
    }

    /**
     * @param mixed $productSearchPageAvailable
     */
    public function setProductSearchPageAvailable($productSearchPageAvailable)
    {
        $this->productSearchPageAvailable = $productSearchPageAvailable;
    }

    /**
     * @return mixed
     */
    public function getProductSearchPageAvailable()
    {
        return $this->productSearchPageAvailable;
    }

    /**
     * @param mixed $sellerGuaranteeEligible
     */
    public function setSellerGuaranteeEligible($sellerGuaranteeEligible)
    {
        $this->sellerGuaranteeEligible = $sellerGuaranteeEligible;
    }

    /**
     * @return mixed
     */
    public function getSellerGuaranteeEligible()
    {
        return $this->sellerGuaranteeEligible;
    }

    /**
     * @param mixed $virtual
     */
    public function setVirtual($virtual)
    {
        $this->virtual = $virtual;
    }

    /**
     * @return mixed
     */
    public function getVirtual()
    {
        return $this->virtual;
    }



}
