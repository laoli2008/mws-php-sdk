<?php

namespace Amazon\MWS\Recommendations\Model;

use Amazon\MWS\Recommendations\Model;


/**
 * AdvertisingRecommendation
 *
 * Properties:
 * <ul>
 * <li>LastUpdated: string</li>
 * <li>ItemIdentifier: ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>BrandName: string</li>
 * <li>ProductCategory: string</li>
 * <li>SalesRank: int</li>
 * <li>YourPricePlusShipping: Price</li>
 * <li>LowestPricePlusShipping: Price</li>
 * <li>AvailableQuantity: int</li>
 * <li>SalesForTheLast30Days: int</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 * </ul>
 */
class AdvertisingRecommendation extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'LastUpdated'             => array('FieldValue' => null, 'FieldType' => 'string'),
            'ItemIdentifier'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ProductIdentifier'),
            'ItemName'                => array('FieldValue' => null, 'FieldType' => 'string'),
            'BrandName'               => array('FieldValue' => null, 'FieldType' => 'string'),
            'ProductCategory'         => array('FieldValue' => null, 'FieldType' => 'string'),
            'SalesRank'               => array('FieldValue' => null, 'FieldType' => 'int'),
            'YourPricePlusShipping'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Price'),
            'LowestPricePlusShipping' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Price'),
            'AvailableQuantity'       => array('FieldValue' => null, 'FieldType' => 'int'),
            'SalesForTheLast30Days'   => array('FieldValue' => null, 'FieldType' => 'int'),
            'RecommendationId'        => array('FieldValue' => null, 'FieldType' => 'string'),
            'RecommendationReason'    => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the LastUpdated property.
     *
     * @return XMLGregorianCalendar LastUpdated.
     */
    public function getLastUpdated()
    {
        return $this->_fields['LastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdated property.
     *
     * @param string lastUpdated
     * @return this instance
     */
    public function setLastUpdated($value)
    {
        $this->_fields['LastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdated is set.
     *
     * @return true if LastUpdated is set.
     */
    public function isSetLastUpdated()
    {
        return !is_null($this->_fields['LastUpdated']['FieldValue']);
    }

    /**
     * Set the value of LastUpdated, return this.
     *
     * @param lastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdated($value)
    {
        $this->setLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return ProductIdentifier ItemIdentifier.
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param ProductIdentifier itemIdentifier
     * @return this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set.
     */
    public function isSetItemIdentifier()
    {
        return !is_null($this->_fields['ItemIdentifier']['FieldValue']);
    }

    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param itemIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemIdentifier($value)
    {
        $this->setItemIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the ItemName property.
     *
     * @return String ItemName.
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @return this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set.
     */
    public function isSetItemName()
    {
        return !is_null($this->_fields['ItemName']['FieldValue']);
    }

    /**
     * Set the value of ItemName, return this.
     *
     * @param itemName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemName($value)
    {
        $this->setItemName($value);
        return $this;
    }

    /**
     * Get the value of the BrandName property.
     *
     * @return String BrandName.
     */
    public function getBrandName()
    {
        return $this->_fields['BrandName']['FieldValue'];
    }

    /**
     * Set the value of the BrandName property.
     *
     * @param string brandName
     * @return this instance
     */
    public function setBrandName($value)
    {
        $this->_fields['BrandName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BrandName is set.
     *
     * @return true if BrandName is set.
     */
    public function isSetBrandName()
    {
        return !is_null($this->_fields['BrandName']['FieldValue']);
    }

    /**
     * Set the value of BrandName, return this.
     *
     * @param brandName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBrandName($value)
    {
        $this->setBrandName($value);
        return $this;
    }

    /**
     * Get the value of the ProductCategory property.
     *
     * @return String ProductCategory.
     */
    public function getProductCategory()
    {
        return $this->_fields['ProductCategory']['FieldValue'];
    }

    /**
     * Set the value of the ProductCategory property.
     *
     * @param string productCategory
     * @return this instance
     */
    public function setProductCategory($value)
    {
        $this->_fields['ProductCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProductCategory is set.
     *
     * @return true if ProductCategory is set.
     */
    public function isSetProductCategory()
    {
        return !is_null($this->_fields['ProductCategory']['FieldValue']);
    }

    /**
     * Set the value of ProductCategory, return this.
     *
     * @param productCategory
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProductCategory($value)
    {
        $this->setProductCategory($value);
        return $this;
    }

    /**
     * Get the value of the SalesRank property.
     *
     * @return Integer SalesRank.
     */
    public function getSalesRank()
    {
        return $this->_fields['SalesRank']['FieldValue'];
    }

    /**
     * Set the value of the SalesRank property.
     *
     * @param int salesRank
     * @return this instance
     */
    public function setSalesRank($value)
    {
        $this->_fields['SalesRank']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalesRank is set.
     *
     * @return true if SalesRank is set.
     */
    public function isSetSalesRank()
    {
        return !is_null($this->_fields['SalesRank']['FieldValue']);
    }

    /**
     * Set the value of SalesRank, return this.
     *
     * @param salesRank
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSalesRank($value)
    {
        $this->setSalesRank($value);
        return $this;
    }

    /**
     * Get the value of the YourPricePlusShipping property.
     *
     * @return Price YourPricePlusShipping.
     */
    public function getYourPricePlusShipping()
    {
        return $this->_fields['YourPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the YourPricePlusShipping property.
     *
     * @param Price yourPricePlusShipping
     * @return this instance
     */
    public function setYourPricePlusShipping($value)
    {
        $this->_fields['YourPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if YourPricePlusShipping is set.
     *
     * @return true if YourPricePlusShipping is set.
     */
    public function isSetYourPricePlusShipping()
    {
        return !is_null($this->_fields['YourPricePlusShipping']['FieldValue']);
    }

    /**
     * Set the value of YourPricePlusShipping, return this.
     *
     * @param yourPricePlusShipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withYourPricePlusShipping($value)
    {
        $this->setYourPricePlusShipping($value);
        return $this;
    }

    /**
     * Get the value of the LowestPricePlusShipping property.
     *
     * @return Price LowestPricePlusShipping.
     */
    public function getLowestPricePlusShipping()
    {
        return $this->_fields['LowestPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the LowestPricePlusShipping property.
     *
     * @param Price lowestPricePlusShipping
     * @return this instance
     */
    public function setLowestPricePlusShipping($value)
    {
        $this->_fields['LowestPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LowestPricePlusShipping is set.
     *
     * @return true if LowestPricePlusShipping is set.
     */
    public function isSetLowestPricePlusShipping()
    {
        return !is_null($this->_fields['LowestPricePlusShipping']['FieldValue']);
    }

    /**
     * Set the value of LowestPricePlusShipping, return this.
     *
     * @param lowestPricePlusShipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLowestPricePlusShipping($value)
    {
        $this->setLowestPricePlusShipping($value);
        return $this;
    }

    /**
     * Get the value of the AvailableQuantity property.
     *
     * @return Integer AvailableQuantity.
     */
    public function getAvailableQuantity()
    {
        return $this->_fields['AvailableQuantity']['FieldValue'];
    }

    /**
     * Set the value of the AvailableQuantity property.
     *
     * @param int availableQuantity
     * @return this instance
     */
    public function setAvailableQuantity($value)
    {
        $this->_fields['AvailableQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AvailableQuantity is set.
     *
     * @return true if AvailableQuantity is set.
     */
    public function isSetAvailableQuantity()
    {
        return !is_null($this->_fields['AvailableQuantity']['FieldValue']);
    }

    /**
     * Set the value of AvailableQuantity, return this.
     *
     * @param availableQuantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAvailableQuantity($value)
    {
        $this->setAvailableQuantity($value);
        return $this;
    }

    /**
     * Get the value of the SalesForTheLast30Days property.
     *
     * @return Integer SalesForTheLast30Days.
     */
    public function getSalesForTheLast30Days()
    {
        return $this->_fields['SalesForTheLast30Days']['FieldValue'];
    }

    /**
     * Set the value of the SalesForTheLast30Days property.
     *
     * @param int salesForTheLast30Days
     * @return this instance
     */
    public function setSalesForTheLast30Days($value)
    {
        $this->_fields['SalesForTheLast30Days']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalesForTheLast30Days is set.
     *
     * @return true if SalesForTheLast30Days is set.
     */
    public function isSetSalesForTheLast30Days()
    {
        return !is_null($this->_fields['SalesForTheLast30Days']['FieldValue']);
    }

    /**
     * Set the value of SalesForTheLast30Days, return this.
     *
     * @param salesForTheLast30Days
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSalesForTheLast30Days($value)
    {
        $this->setSalesForTheLast30Days($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationId property.
     *
     * @return String RecommendationId.
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @return this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set.
     */
    public function isSetRecommendationId()
    {
        return !is_null($this->_fields['RecommendationId']['FieldValue']);
    }

    /**
     * Set the value of RecommendationId, return this.
     *
     * @param recommendationId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationId($value)
    {
        $this->setRecommendationId($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationReason property.
     *
     * @return String RecommendationReason.
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @return this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set.
     */
    public function isSetRecommendationReason()
    {
        return !is_null($this->_fields['RecommendationReason']['FieldValue']);
    }

    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param recommendationReason
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationReason($value)
    {
        $this->setRecommendationReason($value);
        return $this;
    }
}
