<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * CreateInboundShipmentResult
 *
 * Properties:
 * <ul>
 * <li>ShipmentId: string</li>
 * </ul>
 */
class CreateInboundShipmentResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }
}
