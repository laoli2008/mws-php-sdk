<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * GetMatchingProductForIdRequest
 *
 * Properties:
 * <ul>
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>IdType: string</li>
 * <li>IdList: IdListType</li>
 * </ul>
 */
class GetMatchingProductForIdRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerId'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'  => array('FieldValue' => null, 'FieldType' => 'string'),
            'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'IdType'        => array('FieldValue' => null, 'FieldType' => 'string'),
            'IdList'        => array('FieldValue' => null, 'FieldType' => 'IdListType'),
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
     * Get the value of the IdType property.
     *
     * @return String IdType.
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @return this instance
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set.
     */
    public function isSetIdType()
    {
        return !is_null($this->_fields['IdType']['FieldValue']);
    }

    /**
     * Set the value of IdType, return this.
     *
     * @param idType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIdType($value)
    {
        $this->setIdType($value);
        return $this;
    }

    /**
     * Get the value of the IdList property.
     *
     * @return IdListType IdList.
     */
    public function getIdList()
    {
        return $this->_fields['IdList']['FieldValue'];
    }

    /**
     * Set the value of the IdList property.
     *
     * @param IdListType idList
     * @return this instance
     */
    public function setIdList($value)
    {
        $this->_fields['IdList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IdList is set.
     *
     * @return true if IdList is set.
     */
    public function isSetIdList()
    {
        return !is_null($this->_fields['IdList']['FieldValue']);
    }

    /**
     * Set the value of IdList, return this.
     *
     * @param idList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIdList($value)
    {
        $this->setIdList($value);
        return $this;
    }
}
