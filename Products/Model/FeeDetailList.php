<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;


/**
 * FeeDetailList
 *
 * Properties:
 * <ul>
 * <li>FeeDetail: array</li>
 * </ul>
 */
class FeeDetailList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'FeeDetail' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\FeeDetail')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the FeeDetail property.
     *
     * @return List<FeeDetail> FeeDetail.
     */
    public function getFeeDetail()
    {
        if ($this->_fields['FeeDetail']['FieldValue'] == null) {
            $this->_fields['FeeDetail']['FieldValue'] = array();
        }
        return $this->_fields['FeeDetail']['FieldValue'];
    }

    /**
     * Set the value of the FeeDetail property.
     *
     * @param array feeDetail
     * @return this instance
     */
    public function setFeeDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FeeDetail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FeeDetail.
     */
    public function unsetFeeDetail()
    {
        $this->_fields['FeeDetail']['FieldValue'] = array();
    }

    /**
     * Check to see if FeeDetail is set.
     *
     * @return true if FeeDetail is set.
     */
    public function isSetFeeDetail()
    {
        return !empty($this->_fields['FeeDetail']['FieldValue']);
    }

    /**
     * Add values for FeeDetail, return this.
     *
     * @param feeDetail
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFeeDetail()
    {
        foreach (func_get_args() as $FeeDetail) {
            $this->_fields['FeeDetail']['FieldValue'][] = $FeeDetail;
        }
        return $this;
    }
}
