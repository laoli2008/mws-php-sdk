<?php

namespace Amazon\MWS\MerchantFulfillment\Model;

use Amazon\MWS\MerchantFulfillment\Model;

/**
 * CreateShipmentRequest
 *
 * Properties:
 * <ul>
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>ShipmentRequestDetails: ShipmentRequestDetails</li>
 * <li>ShippingServiceId: string</li>
 * <li>ShippingServiceOfferId: string</li>
 * </ul>
 */
class CreateShipmentRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerId'               => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'           => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipmentRequestDetails' => array('FieldValue' => null, 'FieldType' => 'ShipmentRequestDetails'),
            'ShippingServiceId'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShippingServiceOfferId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentRequestDetails property.
     *
     * @return ShipmentRequestDetails ShipmentRequestDetails.
     */
    public function getShipmentRequestDetails()
    {
        return $this->_fields['ShipmentRequestDetails']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentRequestDetails property.
     *
     * @param ShipmentRequestDetails shipmentRequestDetails
     * @return this instance
     */
    public function setShipmentRequestDetails($value)
    {
        $this->_fields['ShipmentRequestDetails']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentRequestDetails is set.
     *
     * @return true if ShipmentRequestDetails is set.
     */
    public function isSetShipmentRequestDetails()
    {
        return !is_null($this->_fields['ShipmentRequestDetails']['FieldValue']);
    }

    /**
     * Set the value of ShipmentRequestDetails, return this.
     *
     * @param shipmentRequestDetails
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentRequestDetails($value)
    {
        $this->setShipmentRequestDetails($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return String ShippingServiceId.
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @return this instance
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set.
     */
    public function isSetShippingServiceId()
    {
        return !is_null($this->_fields['ShippingServiceId']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param shippingServiceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceId($value)
    {
        $this->setShippingServiceId($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return String ShippingServiceOfferId.
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @return this instance
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set.
     */
    public function isSetShippingServiceOfferId()
    {
        return !is_null($this->_fields['ShippingServiceOfferId']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param shippingServiceOfferId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceOfferId($value)
    {
        $this->setShippingServiceOfferId($value);
        return $this;
    }
}
