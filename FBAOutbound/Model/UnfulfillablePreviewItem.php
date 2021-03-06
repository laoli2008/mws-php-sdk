<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * UnfulfillablePreviewItem
 *
 * Properties:
 * <ul>
 * <li>SellerSKU: string</li>
 * <li>Quantity: int</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>ItemUnfulfillableReasons: StringList</li>
 * </ul>
 */
class UnfulfillablePreviewItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerSKU'                    => array('FieldValue' => null, 'FieldType' => 'string'),
            'Quantity'                     => array('FieldValue' => null, 'FieldType' => 'int'),
            'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ItemUnfulfillableReasons'     => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\StringList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }

    /**
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return String SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return this instance
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set.
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
        return !is_null($this->_fields['SellerFulfillmentOrderItemId']['FieldValue']);
    }

    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param sellerFulfillmentOrderItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);
        return $this;
    }

    /**
     * Get the value of the ItemUnfulfillableReasons property.
     *
     * @return StringList ItemUnfulfillableReasons.
     */
    public function getItemUnfulfillableReasons()
    {
        return $this->_fields['ItemUnfulfillableReasons']['FieldValue'];
    }

    /**
     * Set the value of the ItemUnfulfillableReasons property.
     *
     * @param StringList itemUnfulfillableReasons
     * @return this instance
     */
    public function setItemUnfulfillableReasons($value)
    {
        $this->_fields['ItemUnfulfillableReasons']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemUnfulfillableReasons is set.
     *
     * @return true if ItemUnfulfillableReasons is set.
     */
    public function isSetItemUnfulfillableReasons()
    {
        return !is_null($this->_fields['ItemUnfulfillableReasons']['FieldValue']);
    }

    /**
     * Set the value of ItemUnfulfillableReasons, return this.
     *
     * @param itemUnfulfillableReasons
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemUnfulfillableReasons($value)
    {
        $this->setItemUnfulfillableReasons($value);
        return $this;
    }
}
