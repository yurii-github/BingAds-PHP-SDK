<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.100).aspx DeleteBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
    final class DeleteBudgetsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}