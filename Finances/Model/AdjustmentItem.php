<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * AdjustmentItem
 *
 * Properties:
 * <ul>
 * <li>Quantity: string</li>
 * <li>PerUnitAmount: Currency</li>
 * <li>TotalAmount: Currency</li>
 * <li>SellerSKU: string</li>
 * <li>FnSKU: string</li>
 * <li>ProductDescription: string</li>
 * <li>ASIN: string</li>
 * </ul>
 */
class AdjustmentItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Quantity'           => array('FieldValue' => null, 'FieldType' => 'string'),
            'PerUnitAmount'      => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
            'TotalAmount'        => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
            'SellerSKU'          => array('FieldValue' => null, 'FieldType' => 'string'),
            'FnSKU'              => array('FieldValue' => null, 'FieldType' => 'string'),
            'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ASIN'               => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return String Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param string quantity
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
     * Get the value of the PerUnitAmount property.
     *
     * @return Currency PerUnitAmount.
     */
    public function getPerUnitAmount()
    {
        return $this->_fields['PerUnitAmount']['FieldValue'];
    }

    /**
     * Set the value of the PerUnitAmount property.
     *
     * @param Currency perUnitAmount
     * @return this instance
     */
    public function setPerUnitAmount($value)
    {
        $this->_fields['PerUnitAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PerUnitAmount is set.
     *
     * @return true if PerUnitAmount is set.
     */
    public function isSetPerUnitAmount()
    {
        return !is_null($this->_fields['PerUnitAmount']['FieldValue']);
    }

    /**
     * Set the value of PerUnitAmount, return this.
     *
     * @param perUnitAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPerUnitAmount($value)
    {
        $this->setPerUnitAmount($value);
        return $this;
    }

    /**
     * Get the value of the TotalAmount property.
     *
     * @return Currency TotalAmount.
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }

    /**
     * Set the value of the TotalAmount property.
     *
     * @param Currency totalAmount
     * @return this instance
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set.
     */
    public function isSetTotalAmount()
    {
        return !is_null($this->_fields['TotalAmount']['FieldValue']);
    }

    /**
     * Set the value of TotalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalAmount($value)
    {
        $this->setTotalAmount($value);
        return $this;
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
     * Get the value of the FnSKU property.
     *
     * @return String FnSKU.
     */
    public function getFnSKU()
    {
        return $this->_fields['FnSKU']['FieldValue'];
    }

    /**
     * Set the value of the FnSKU property.
     *
     * @param string fnSKU
     * @return this instance
     */
    public function setFnSKU($value)
    {
        $this->_fields['FnSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FnSKU is set.
     *
     * @return true if FnSKU is set.
     */
    public function isSetFnSKU()
    {
        return !is_null($this->_fields['FnSKU']['FieldValue']);
    }

    /**
     * Set the value of FnSKU, return this.
     *
     * @param fnSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFnSKU($value)
    {
        $this->setFnSKU($value);
        return $this;
    }

    /**
     * Get the value of the ProductDescription property.
     *
     * @return String ProductDescription.
     */
    public function getProductDescription()
    {
        return $this->_fields['ProductDescription']['FieldValue'];
    }

    /**
     * Set the value of the ProductDescription property.
     *
     * @param string productDescription
     * @return this instance
     */
    public function setProductDescription($value)
    {
        $this->_fields['ProductDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProductDescription is set.
     *
     * @return true if ProductDescription is set.
     */
    public function isSetProductDescription()
    {
        return !is_null($this->_fields['ProductDescription']['FieldValue']);
    }

    /**
     * Set the value of ProductDescription, return this.
     *
     * @param productDescription
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProductDescription($value)
    {
        $this->setProductDescription($value);
        return $this;
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }
}
