<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ad group level settings for feed-based cooperative bidding campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/coopsetting?view=bingads-13 CoOpSetting Data Object
     * 
     * @uses BidOption
     */
    final class CoOpSetting extends Setting
    {
        /**
         * The percentage (greater than zero) that allows your cooperative bid to flex.
         * @var double
         */
        public $BidBoostValue;

        /**
         * The flat amount of your cooperative bid.
         * @var double
         */
        public $BidMaxValue;

        /**
         * Determines whether or not to amplify your partner's bid.
         * @var BidOption
         */
        public $BidOption;
    }

}
