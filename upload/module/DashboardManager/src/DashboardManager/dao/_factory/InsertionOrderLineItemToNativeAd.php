<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

namespace _factory;

use Zend\Db\TableGateway\Feature;

class InsertionOrderLineItemToNativeAd extends \_factory\CachedTableRead
{

	static protected $instance = null;

	public static function get_instance() {

		if (self::$instance == null):
			self::$instance = new \_factory\InsertionOrderLineItemToNativeAd();
		endif;
		return self::$instance;
	}


    function __construct() {

            $this->table = 'InsertionOrderLineItemToNativeAd';
            $this->featureSet = new Feature\FeatureSet();
            $this->featureSet->addFeature(new Feature\GlobalAdapterFeature());
            $this->initialize();
    }

    /**
     * Query database and return a row of results.
     * 
     * @param string $params
     * @return Ambigous <\Zend\Db\ResultSet\ResultSet, NULL, \Zend\Db\ResultSet\ResultSetInterface>|NULL
     */
    public function get_row($params = null) {
        // http://files.zend.com/help/Zend-Framework/zend.db.select.html

        $obj_list = array();

        $resultSet = $this->select(function (\Zend\Db\Sql\Select $select) use ($params) {
        	foreach ($params as $name => $value):
        	$select->where(
        			$select->where->equalTo($name, $value)
        	);
        	endforeach;
        	$select->limit(1, 0);
        	$select->order(array('InsertionOrderLineItemToNativeAdID'));

        }
        	);

    	    foreach ($resultSet as $obj):
    	         return $obj;
    	    endforeach;

        	return null;
    }

    /**
     * Query database and return results.
     *
     * @param string $params
     * @return multitype:Ambigous <\Zend\Db\ResultSet\ResultSet, NULL, \Zend\Db\ResultSet\ResultSetInterface>
     */
    public function get($params = null) {
    	// http://files.zend.com/help/Zend-Framework/zend.db.select.html
    
    	$obj_list = array();
    
    	$resultSet = $this->select(function (\Zend\Db\Sql\Select $select) use ($params) {
    		foreach ($params as $name => $value):
    		$select->where(
    				$select->where->equalTo($name, $value)
    		);
    		endforeach;
    		//$select->limit(10, 0);
    		$select->order(array('InsertionOrderLineItemToNativeAdID'));
    	}
    		);
    
    		foreach ($resultSet as $obj):
    			$obj_list[] = $obj;
    		endforeach;
    
    		return $obj_list;
    }
   
   public function saveInsertionOrderLineItemToNativeAd(\model\InsertionOrderLineItemToNativeAd $InsertionOrderLineItemToNativeAd) {

	   	$data = array(
	   			'InsertionOrderLineItemID'         		=> $InsertionOrderLineItemToNativeAd->InsertionOrderLineItemID,
	   			'NativeAdResponseItemID'				=> $InsertionOrderLineItemToNativeAd->NativeAdResponseItemID,
	   			'DateCreated'         					=> $InsertionOrderLineItemToNativeAd->DateCreated
	   	);

		$this->insert($data);
		return $this->getLastInsertValue();
   }
   
   /**
    * Delete the Ad specified.
    * 
    * @param int $InsertionOrderID The integer ID of the Ad Campaign to delete.
    * @throws \InvalidArgumentException is thrown when an invalid integer is provided.
    * @return boolean|int Returns the rows affected, or FALSE if failure.
    */
   public function deleteInsertionOrderLineItemToNativeAdByCampaignID($InsertionOrderID)
   {
	   	$InsertionOrderLineItemFactory = \_factory\InsertionOrderLineItem::get_instance();
	   	$params = array();
	   	$params["InsertionOrderID"] = $InsertionOrderID;
   	
	   	$InsertionOrderLineItemList = $InsertionOrderLineItemFactory->get($params);
	   	
	   	foreach ($InsertionOrderLineItemList as $InsertionOrderLineItem):
	   	
       		$result = $this->delete(array("InsertionOrderLineItemID" => $InsertionOrderLineItem->InsertionOrderLineItemID));
       	
       	endforeach;
   }
   
};