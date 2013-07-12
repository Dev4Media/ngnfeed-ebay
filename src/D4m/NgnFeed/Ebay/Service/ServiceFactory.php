<?php

namespace D4m\NgnFeed\Ebay\Service;


class ServiceFactory
{
    private $manager;

    public function getService($serviceName, $arguments = [])
    {
        if($this->serviceExists($serviceName)) {
            $service = $this->getClass($serviceName);
            return new $service($arguments);
        }
        else if($this->isServiceAllowed($serviceName)) {
            return new SimpleApiCall($serviceName, $arguments);
        }
        else {
            throw new \InvalidArgumentException("No Service Found");
        }

    }

    /**
     * @param  $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->manager;
    }



    private function serviceExists($serviceName)
    {
        $class = $this->getClass($serviceName);
        return class_exists($class);
    }

    private function isServiceAllowed($serviceName)
    {
        return in_array($serviceName, $this->getServiceList());
    }

    private function getClass($classeName)
    {
        return $this->getNamespace()."\\".$classeName;
    }

    private function getNamespace()
    {
        return __NAMESPACE__;
    }

    private function getServiceList()
    {
        return [
            "AddDispute",
            "AddDisputeResponse",
            "AddFixedPriceItem",
            "AddItem",
            "AddItems",
            "AddMemberMessageAAQToPartner",
            "AddMemberMessageRTQ",
            "AddMemberMessagesAAQToBidder",
            "AddOrder",
            "AddSecondChanceItem",
            "AddToItemDescription",
            "AddToWatchList",
            "AddTransactionConfirmationItem",
            "CompleteSale",
            "ConfirmIdentity",
            "DeleteMyMessages",
            "EndFixedPriceItem",
            "EndItem",
            "EndItems",
            "FetchToken",
            "GetAccount",
            "GetAdFormatLeads",
            "GetAllBidders",
            "GetApiAccessRules",
            "GetBestOffers",
            "GetBidderList",
            "GetCategories",
            "GetCategory2CS",
            "GetCategory2FinanceOffer",
            "GetCategoryFeatures",
            "GetCategoryListings",
            "GetCategoryMappings",
            "GetCategorySpecifics",
            "GetChallengeToken",
            "GetCharitiesCall",
            "GetClientAlertsAuthToken",
            "GetContextualKeywords",
            "GetCrossPromotions",
            "GetDescriptionTemplates",
            "GetDispute",
            "GeteBayDetails",
            "GeteBayOfficialTime",
            "GetFeedback",
            "GetFinanceOffers",
            "GetItem",
            "GetItemsAwaitingFeedback",
            "GetItemShipping",
            "GetItemTransactions",
            "GetMemberMessages",
            "GetMessagePreferences",
            "GetMyeBayBuying",
            "GetMyeBayReminders",
            "GetMyeBaySelling",
            "GetMyMessages",
            "GetNotificationPreferencesCall",
            "GetNotificationsUsageCall",
            "GetOrders",
            "GetOrderTransactions",
            "GetPromotionalSaleDetails",
            "GetPromotionRulesGetSellerDashboard",
            "GetSellerEvents",
            "GetSellerList",
            "GetSellerPaymentsCall",
            "GetSellerTransactions",
            "GetSessionID",
            "GetShippingDiscountProfiles",
            "GetStore",
            "GetStoreCategoryUpdateStatus",
            "GetStoreCustomPage",
            "GetStoreOptions",
            "GetStorePreferences",
            "GetSuggestedCategories",
            "GetTaxTable",
            "GetTokenStatus",
            "GetUser",
            "GetUserContactDetails",
            "GetUserDisputes",
            "GetUserPreferences",
            "GetVeROReasonCodeDetailsCall",
            "GetVeROReportStatusCall",
            "GetWantItNowPostCall",
            "GetWantItNowSearchResultsCall",
            "IssueRefundCall",
            "LeaveFeedback",
            "PlaceOffer",
            "RelistFixedPriceItem",
            "RelistItem",
            "RemoveFromWatchList",
            "RespondToBestOfferCall",
            "RespondToFeedback",
            "RespondToWantItNowPostCall",
            "ReviseCheckoutStatus",
            "ReviseFixedPriceItem",
            "ReviseItem",
            "ReviseMyMessages",
            "ReviseMyMessagesFolders",
            "RevokeToken",
            "SellerReverseDisputeCall",
            "SendInvoice",
            "SetMessagePreferences",
            "SetNotificationPreferences",
            "SetPromotionalSale",
            "SetPromotionalSaleListings",
            "SetShippingDiscountProfiles",
            "SetStore",
            "SetStoreCategories",
            "SetStoreCustomPage",
            "SetStorePreferences",
            "SetTaxTable",
            "SetUserNotes",
            "SetUserPreferences",
            "UploadSiteHostedPictures",
            "ValidateChallengeInput",
            "ValidateTestUserRegistration",
            "VerifyAddFixedPriceItem",
            "VerifyAddItem",
            "VerifyAddSecondChanceItem",
            "VeROReportItemsCall"
        ];
    }

}
