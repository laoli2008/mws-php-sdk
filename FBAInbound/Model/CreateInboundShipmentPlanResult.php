<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * CreateInboundShipmentPlanResult
 *
 * Properties:
 * <ul>
 * <li>InboundShipmentPlans: InboundShipmentPlanList</li>
 * </ul>
 */
class CreateInboundShipmentPlanResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'InboundShipmentPlans' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\InboundShipmentPlanList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the InboundShipmentPlans property.
     *
     * @return InboundShipmentPlanList InboundShipmentPlans.
     */
    public function getInboundShipmentPlans()
    {
        return $this->_fields['InboundShipmentPlans']['FieldValue'];
    }

    /**
     * Set the value of the InboundShipmentPlans property.
     *
     * @param InboundShipmentPlanList inboundShipmentPlans
     * @return this instance
     */
    public function setInboundShipmentPlans($value)
    {
        $this->_fields['InboundShipmentPlans']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InboundShipmentPlans is set.
     *
     * @return true if InboundShipmentPlans is set.
     */
    public function isSetInboundShipmentPlans()
    {
        return !is_null($this->_fields['InboundShipmentPlans']['FieldValue']);
    }

    /**
     * Set the value of InboundShipmentPlans, return this.
     *
     * @param inboundShipmentPlans
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInboundShipmentPlans($value)
    {
        $this->setInboundShipmentPlans($value);
        return $this;
    }
}
