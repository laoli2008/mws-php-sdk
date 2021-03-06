<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * NonPartneredSmallParcelDataOutput
 *
 * Properties:
 * <ul>
 * <li>PackageList: NonPartneredSmallParcelPackageOutputList</li>
 * </ul>
 */
class NonPartneredSmallParcelDataOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'PackageList' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\NonPartneredSmallParcelPackageOutputList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the PackageList property.
     *
     * @return NonPartneredSmallParcelPackageOutputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of the PackageList property.
     *
     * @param NonPartneredSmallParcelPackageOutputList packageList
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
