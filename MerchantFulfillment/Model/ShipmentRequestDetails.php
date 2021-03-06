<?php

namespace Amazon\MWS\MerchantFulfillment\Model;

use Amazon\MWS\MerchantFulfillment\Model;

/**
 * ShipmentRequestDetails
 *
 * Properties:
 * <ul>
 * <li>AmazonOrderId: string</li>
 * <li>SellerOrderId: string</li>
 * <li>ItemList: array</li>
 * <li>ShipFromAddress: Address</li>
 * <li>PackageDimensions: PackageDimensions</li>
 * <li>Weight: Weight</li>
 * <li>MustArriveByDate: string</li>
 * <li>ShipDate: string</li>
 * <li>ShippingServiceOptions: ShippingServiceOptions</li>
 * </ul>
 */
class ShipmentRequestDetails extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'AmazonOrderId'          => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerOrderId'          => array('FieldValue' => null, 'FieldType' => 'string'),
            'ItemList'               => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\Item'), 'ListMemberName' => 'Item'),
            'ShipFromAddress'        => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Address'),
            'PackageDimensions'      => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\PackageDimensions'),
            'Weight'                 => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Weight'),
            'MustArriveByDate'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipDate'               => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShippingServiceOptions' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ShippingServiceOptions'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return this instance
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
        return !is_null($this->_fields['SellerOrderId']['FieldValue']);
    }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }

    /**
     * Get the value of the ItemList property.
     *
     * @return List<Item> ItemList.
     */
    public function getItemList()
    {
        if ($this->_fields['ItemList']['FieldValue'] == null) {
            $this->_fields['ItemList']['FieldValue'] = array();
        }
        return $this->_fields['ItemList']['FieldValue'];
    }

    /**
     * Set the value of the ItemList property.
     *
     * @param array itemList
     * @return this instance
     */
    public function setItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemList.
     */
    public function unsetItemList()
    {
        $this->_fields['ItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemList is set.
     *
     * @return true if ItemList is set.
     */
    public function isSetItemList()
    {
        return !empty($this->_fields['ItemList']['FieldValue']);
    }

    /**
     * Add values for ItemList, return this.
     *
     * @param itemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemList()
    {
        foreach (func_get_args() as $ItemList) {
            $this->_fields['ItemList']['FieldValue'][] = $ItemList;
        }
        return $this;
    }

    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return Address ShipFromAddress.
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param Address shipFromAddress
     * @return this instance
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set.
     */
    public function isSetShipFromAddress()
    {
        return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
    }

    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);
        return $this;
    }

    /**
     * Get the value of the PackageDimensions property.
     *
     * @return PackageDimensions PackageDimensions.
     */
    public function getPackageDimensions()
    {
        return $this->_fields['PackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of the PackageDimensions property.
     *
     * @param PackageDimensions packageDimensions
     * @return this instance
     */
    public function setPackageDimensions($value)
    {
        $this->_fields['PackageDimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageDimensions is set.
     *
     * @return true if PackageDimensions is set.
     */
    public function isSetPackageDimensions()
    {
        return !is_null($this->_fields['PackageDimensions']['FieldValue']);
    }

    /**
     * Set the value of PackageDimensions, return this.
     *
     * @param packageDimensions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageDimensions($value)
    {
        $this->setPackageDimensions($value);
        return $this;
    }

    /**
     * Get the value of the Weight property.
     *
     * @return Weight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param Weight weight
     * @return this instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set.
     */
    public function isSetWeight()
    {
        return !is_null($this->_fields['Weight']['FieldValue']);
    }

    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }

    /**
     * Get the value of the MustArriveByDate property.
     *
     * @return XMLGregorianCalendar MustArriveByDate.
     */
    public function getMustArriveByDate()
    {
        return $this->_fields['MustArriveByDate']['FieldValue'];
    }

    /**
     * Set the value of the MustArriveByDate property.
     *
     * @param string mustArriveByDate
     * @return this instance
     */
    public function setMustArriveByDate($value)
    {
        $this->_fields['MustArriveByDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MustArriveByDate is set.
     *
     * @return true if MustArriveByDate is set.
     */
    public function isSetMustArriveByDate()
    {
        return !is_null($this->_fields['MustArriveByDate']['FieldValue']);
    }

    /**
     * Set the value of MustArriveByDate, return this.
     *
     * @param mustArriveByDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMustArriveByDate($value)
    {
        $this->setMustArriveByDate($value);
        return $this;
    }

    /**
     * Get the value of the ShipDate property.
     *
     * @return XMLGregorianCalendar ShipDate.
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }

    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @return this instance
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set.
     */
    public function isSetShipDate()
    {
        return !is_null($this->_fields['ShipDate']['FieldValue']);
    }

    /**
     * Set the value of ShipDate, return this.
     *
     * @param shipDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipDate($value)
    {
        $this->setShipDate($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceOptions property.
     *
     * @return ShippingServiceOptions ShippingServiceOptions.
     */
    public function getShippingServiceOptions()
    {
        return $this->_fields['ShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOptions property.
     *
     * @param ShippingServiceOptions shippingServiceOptions
     * @return this instance
     */
    public function setShippingServiceOptions($value)
    {
        $this->_fields['ShippingServiceOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceOptions is set.
     *
     * @return true if ShippingServiceOptions is set.
     */
    public function isSetShippingServiceOptions()
    {
        return !is_null($this->_fields['ShippingServiceOptions']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceOptions, return this.
     *
     * @param shippingServiceOptions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceOptions($value)
    {
        $this->setShippingServiceOptions($value);
        return $this;
    }
}
