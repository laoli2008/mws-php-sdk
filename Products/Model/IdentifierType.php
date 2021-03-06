<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * IdentifierType
 *
 * Properties:
 * <ul>
 * <li>MarketplaceASIN: ASINIdentifier</li>
 * <li>SKUIdentifier: SellerSKUIdentifier</li>
 * </ul>
 */
class IdentifierType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'MarketplaceASIN' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ASINIdentifier'),
            'SKUIdentifier'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\SellerSKUIdentifier'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceASIN property.
     *
     * @return ASINIdentifier MarketplaceASIN.
     */
    public function getMarketplaceASIN()
    {
        return $this->_fields['MarketplaceASIN']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceASIN property.
     *
     * @param ASINIdentifier marketplaceASIN
     * @return this instance
     */
    public function setMarketplaceASIN($value)
    {
        $this->_fields['MarketplaceASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceASIN is set.
     *
     * @return true if MarketplaceASIN is set.
     */
    public function isSetMarketplaceASIN()
    {
        return !is_null($this->_fields['MarketplaceASIN']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceASIN, return this.
     *
     * @param marketplaceASIN
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceASIN($value)
    {
        $this->setMarketplaceASIN($value);
        return $this;
    }

    /**
     * Get the value of the SKUIdentifier property.
     *
     * @return SellerSKUIdentifier SKUIdentifier.
     */
    public function getSKUIdentifier()
    {
        return $this->_fields['SKUIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the SKUIdentifier property.
     *
     * @param SellerSKUIdentifier skuIdentifier
     * @return this instance
     */
    public function setSKUIdentifier($value)
    {
        $this->_fields['SKUIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SKUIdentifier is set.
     *
     * @return true if SKUIdentifier is set.
     */
    public function isSetSKUIdentifier()
    {
        return !is_null($this->_fields['SKUIdentifier']['FieldValue']);
    }

    /**
     * Set the value of SKUIdentifier, return this.
     *
     * @param skuIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSKUIdentifier($value)
    {
        $this->setSKUIdentifier($value);
        return $this;
    }
}
