<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

namespace model;

class InsertionOrderLineItemPreview {

    public $InsertionOrderLineItemPreviewID;
    public $InsertionOrderPreviewID;
    public $InsertionOrderLineItemID;  // nullable
    public $ImpressionType;
    public $UserID;
    public $Name;
    public $StartDate;
    public $EndDate;
    public $IsMobile;
    public $IABSize;
    public $Height;
    public $Width;
    public $Weight;
    public $BidAmount;
    public $AdTag;
    public $DeliveryType;
    public $LandingPageTLD;
    public $ImpressionsCounter;
    public $BidsCounter;
    public $CurrentSpend;
    public $Active;
    public $DateCreated;
    public $ChangeWentLive;
    public $WentLiveDate;
}

?>