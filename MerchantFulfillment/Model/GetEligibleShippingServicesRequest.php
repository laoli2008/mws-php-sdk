<?php

namespace Amazon\MWS\MerchantFulfillment\Model;


/**
 * GetEligibleShippingServicesRequest
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>ShipmentRequestDetails: ShipmentRequestDetails</li>
 *
 * </ul>
 */

 class GetEligibleShippingServicesRequest extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipmentRequestDetails' => array('FieldValue' => null, 'FieldType' => 'ShipmentRequestDetails'),
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

}