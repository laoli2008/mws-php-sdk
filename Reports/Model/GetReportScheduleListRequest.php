<?php

namespace Amazon\MWS\Reports\Model;

use Amazon\MWS\Reports\Model;

/**
 * GetReportScheduleListRequest
 *
 * Properties:
 * <ul>
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportTypeList: TypeList</li>
 * </ul>
 */
class GetReportScheduleListRequest extends Model
{
    /**
     * Construct new GetReportScheduleListRequest
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportTypeList: TypeList</li>
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'Marketplace'    => array('FieldValue' => null, 'FieldType' => 'string'),
            'Merchant'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'ReportTypeList' => array('FieldValue' => null, 'FieldType' => 'TypeList'),
        );
        parent::__construct($data);
    }

    /**
     * Gets the value of the Marketplace property.
     *
     * @return string Marketplace
     */
    public function getMarketplace()
    {
        return $this->fields['Marketplace']['FieldValue'];
    }

    /**
     * Sets the value of the Marketplace property.
     *
     * @param string Marketplace
     * @return this instance
     */
    public function setMarketplace($value)
    {
        $this->fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Marketplace and returns this instance
     *
     * @param string $value Marketplace
     * @return GetReportScheduleListRequest instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }


    /**
     * Checks if Marketplace is set
     *
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return !is_null($this->fields['Marketplace']['FieldValue']);
    }

    /**
     * Gets the value of the Merchant property.
     *
     * @return string Merchant
     */
    public function getMerchant()
    {
        return $this->fields['Merchant']['FieldValue'];
    }

    /**
     * Sets the value of the Merchant property.
     *
     * @param string Merchant
     * @return this instance
     */
    public function setMerchant($value)
    {
        $this->fields['Merchant']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Merchant and returns this instance
     *
     * @param string $value Merchant
     * @return GetReportScheduleListRequest instance
     */
    public function withMerchant($value)
    {
        $this->setMerchant($value);
        return $this;
    }


    /**
     * Checks if Merchant is set
     *
     * @return bool true if Merchant  is set
     */
    public function isSetMerchant()
    {
        return !is_null($this->fields['Merchant']['FieldValue']);
    }

    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MWSAuthToken and returns this instance
     *
     * @param string $value MWSAuthToken
     * @return GetReportScheduleListRequest instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }


    /**
     * Checks if MWSAuthToken is set
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Gets the value of the ReportTypeList.
     *
     * @return TypeList ReportTypeList
     */
    public function getReportTypeList()
    {
        return $this->fields['ReportTypeList']['FieldValue'];
    }

    /**
     * Sets the value of the ReportTypeList.
     *
     * @param TypeList ReportTypeList
     * @return void
     */
    public function setReportTypeList($value)
    {
        $this->fields['ReportTypeList']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ReportTypeList  and returns this instance
     *
     * @param TypeList $value ReportTypeList
     * @return GetReportScheduleListRequest instance
     */
    public function withReportTypeList($value)
    {
        $this->setReportTypeList($value);
        return $this;
    }


    /**
     * Checks if ReportTypeList  is set
     *
     * @return bool true if ReportTypeList property is set
     */
    public function isSetReportTypeList()
    {
        return !is_null($this->fields['ReportTypeList']['FieldValue']);

    }
}
