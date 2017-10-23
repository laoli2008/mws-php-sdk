<?php

namespace Amazon\MWS\Reports\Model;

use Amazon\MWS\Reports\Model;

/**
 * GetReportScheduleListByNextTokenResponse
 *
 * Properties:
 * <ul>
 * <li>GetReportScheduleListByNextTokenResult: GetReportScheduleListByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * </ul>
 */
class GetReportScheduleListByNextTokenResponse extends Model
{
    /**
     * Construct new GetReportScheduleListByNextTokenResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     * <li>GetReportScheduleListByNextTokenResult: GetReportScheduleListByNextTokenResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'GetReportScheduleListByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'GetReportScheduleListByNextTokenResult'),
            'ResponseMetadata'                       => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct GetReportScheduleListByNextTokenResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return GetReportScheduleListByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportScheduleListByNextTokenResponse');
        if ($response->length == 1) {
            return new GetReportScheduleListByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetReportScheduleListByNextTokenResponse from provided XML.
                                  Make sure that GetReportScheduleListByNextTokenResponse is a root element");
        }
    }

    /**
     * Gets the value of the GetReportScheduleListByNextTokenResult.
     *
     * @return GetReportScheduleListByNextTokenResult GetReportScheduleListByNextTokenResult
     */
    public function getGetReportScheduleListByNextTokenResult()
    {
        return $this->fields['GetReportScheduleListByNextTokenResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportScheduleListByNextTokenResult.
     *
     * @param GetReportScheduleListByNextTokenResult GetReportScheduleListByNextTokenResult
     * @return void
     */
    public function setGetReportScheduleListByNextTokenResult($value)
    {
        $this->fields['GetReportScheduleListByNextTokenResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportScheduleListByNextTokenResult  and returns this instance
     *
     * @param GetReportScheduleListByNextTokenResult $value GetReportScheduleListByNextTokenResult
     * @return GetReportScheduleListByNextTokenResponse instance
     */
    public function withGetReportScheduleListByNextTokenResult($value)
    {
        $this->setGetReportScheduleListByNextTokenResult($value);
        return $this;
    }

    /**
     * Checks if GetReportScheduleListByNextTokenResult  is set
     *
     * @return bool true if GetReportScheduleListByNextTokenResult property is set
     */
    public function isSetGetReportScheduleListByNextTokenResult()
    {
        return !is_null($this->fields['GetReportScheduleListByNextTokenResult']['FieldValue']);
    }

    /**
     * Gets the value of the ResponseMetadata.
     *
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     *
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value)
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     *
     * @param ResponseMetadata $value ResponseMetadata
     * @return GetReportScheduleListByNextTokenResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Checks if ResponseMetadata  is set
     *
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetReportScheduleListByNextTokenResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportScheduleListByNextTokenResponse>";
        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
