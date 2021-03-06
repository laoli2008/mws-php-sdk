<?php

namespace Amazon\MWS\Recommendations\Model;

use Amazon\MWS\Recommendations\Model;

/**
 * ListRecommendationsRequest
 *
 * Properties:
 * <ul>
 * <li>MarketplaceId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>SellerId: string</li>
 * <li>RecommendationCategory: string</li>
 * <li>CategoryQueryList: array</li>
 * </ul>
 */
class ListRecommendationsRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'MarketplaceId'          => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'           => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerId'               => array('FieldValue' => null, 'FieldType' => 'string'),
            'RecommendationCategory' => array('FieldValue' => null, 'FieldType' => 'string'),
            'CategoryQueryList'      => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\CategoryQuery'), 'ListMemberName' => 'CategoryQuery'),
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
     * Get the value of the RecommendationCategory property.
     *
     * @return String RecommendationCategory.
     */
    public function getRecommendationCategory()
    {
        return $this->_fields['RecommendationCategory']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationCategory property.
     *
     * @param string recommendationCategory
     * @return this instance
     */
    public function setRecommendationCategory($value)
    {
        $this->_fields['RecommendationCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationCategory is set.
     *
     * @return true if RecommendationCategory is set.
     */
    public function isSetRecommendationCategory()
    {
        return !is_null($this->_fields['RecommendationCategory']['FieldValue']);
    }

    /**
     * Set the value of RecommendationCategory, return this.
     *
     * @param recommendationCategory
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationCategory($value)
    {
        $this->setRecommendationCategory($value);
        return $this;
    }

    /**
     * Get the value of the CategoryQueryList property.
     *
     * @return List<CategoryQuery> CategoryQueryList.
     */
    public function getCategoryQueryList()
    {
        if ($this->_fields['CategoryQueryList']['FieldValue'] == null) {
            $this->_fields['CategoryQueryList']['FieldValue'] = array();
        }
        return $this->_fields['CategoryQueryList']['FieldValue'];
    }

    /**
     * Set the value of the CategoryQueryList property.
     *
     * @param array categoryQueryList
     * @return this instance
     */
    public function setCategoryQueryList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['CategoryQueryList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear CategoryQueryList.
     */
    public function unsetCategoryQueryList()
    {
        $this->_fields['CategoryQueryList']['FieldValue'] = array();
    }

    /**
     * Check to see if CategoryQueryList is set.
     *
     * @return true if CategoryQueryList is set.
     */
    public function isSetCategoryQueryList()
    {
        return !empty($this->_fields['CategoryQueryList']['FieldValue']);
    }

    /**
     * Add values for CategoryQueryList, return this.
     *
     * @param categoryQueryList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withCategoryQueryList()
    {
        foreach (func_get_args() as $CategoryQueryList) {
            $this->_fields['CategoryQueryList']['FieldValue'][] = $CategoryQueryList;
        }
        return $this;
    }
}
