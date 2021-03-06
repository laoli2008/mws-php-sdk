<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * NonPartneredSmallParcelDataInput
 *
 * Properties:
 * <ul>
 * <li>CarrierName: string</li>
 * <li>PackageList: NonPartneredSmallParcelPackageInputList</li>
 * </ul>
 */
class NonPartneredSmallParcelDataInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PackageList' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\NonPartneredSmallParcelPackageInputList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the PackageList property.
     *
     * @return NonPartneredSmallParcelPackageInputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of the PackageList property.
     *
     * @param NonPartneredSmallParcelPackageInputList packageList
     * @return this instance
     */
    public function setPackageList($value)
    {
        $this->_fields['PackageList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageList is set.
     *
     * @return true if PackageList is set.
     */
    public function isSetPackageList()
    {
        return !is_null($this->_fields['PackageList']['FieldValue']);
    }

    /**
     * Set the value of PackageList, return this.
     *
     * @param packageList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageList($value)
    {
        $this->setPackageList($value);
        return $this;
    }
}
