<?php

namespace Amazon\MWS\MerchantFulfillment\Model;

use Amazon\MWS\MerchantFulfillment\Model;

/**
 * CreateShipmentResult
 *
 * Properties:
 * <ul>
 * <li>Shipment: Shipment</li>
 * </ul>
 */
class CreateShipmentResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Shipment' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Shipment'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Shipment property.
     *
     * @return Shipment Shipment.
     */
    public function getShipment()
    {
        return $this->_fields['Shipment']['FieldValue'];
    }

    /**
     * Set the value of the Shipment property.
     *
     * @param Shipment shipment
     * @return this instance
     */
    public function setShipment($value)
    {
        $this->_fields['Shipment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipment is set.
     *
     * @return true if Shipment is set.
     */
    public function isSetShipment()
    {
        return !is_null($this->_fields['Shipment']['FieldValue']);
    }

    /**
     * Set the value of Shipment, return this.
     *
     * @param shipment
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipment($value)
    {
        $this->setShipment($value);
        return $this;
    }
}
