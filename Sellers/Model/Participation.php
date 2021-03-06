<?php

namespace Amazon\MWS\Sellers\Model;

use Amazon\MWS\Sellers\Model;

/**
 * Participation
 *
 * Properties:
 * <ul>
 * <li>MarketplaceId: string</li>
 * <li>SellerId: string</li>
 * <li>HasSellerSuspendedListings: string</li>
 * </ul>
 */
class Participation extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'MarketplaceId'              => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerId'                   => array('FieldValue' => null, 'FieldType' => 'string'),
            'HasSellerSuspendedListings' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
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
     * Get the value of the HasSellerSuspendedListings property.
     *
     * @return String HasSellerSuspendedListings.
     */
    public function getHasSellerSuspendedListings()
    {
        return $this->_fields['HasSellerSuspendedListings']['FieldValue'];
    }

    /**
     * Set the value of the HasSellerSuspendedListings property.
     *
     * @param string hasSellerSuspendedListings
     * @return this instance
     */
    public function setHasSellerSuspendedListings($value)
    {
        $this->_fields['HasSellerSuspendedListings']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if HasSellerSuspendedListings is set.
     *
     * @return true if HasSellerSuspendedListings is set.
     */
    public function isSetHasSellerSuspendedListings()
    {
        return !is_null($this->_fields['HasSellerSuspendedListings']['FieldValue']);
    }

    /**
     * Set the value of HasSellerSuspendedListings, return this.
     *
     * @param hasSellerSuspendedListings
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withHasSellerSuspendedListings($value)
    {
        $this->setHasSellerSuspendedListings($value);
        return $this;
    }
}
