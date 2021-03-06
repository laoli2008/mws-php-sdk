<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * Subscription
 *
 * Properties:
 * <ul>
 * <li>NotificationType: string</li>
 * <li>Destination: Destination</li>
 * <li>IsEnabled: bool</li>
 * </ul>
 */

class Subscription extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'NotificationType' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Destination'      => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Destination'),
            'IsEnabled'        => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the NotificationType property.
     *
     * @return String NotificationType.
     */
    public function getNotificationType()
    {
        return $this->_fields['NotificationType']['FieldValue'];
    }

    /**
     * Set the value of the NotificationType property.
     *
     * @param string notificationType
     * @return this instance
     */
    public function setNotificationType($value)
    {
        $this->_fields['NotificationType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NotificationType is set.
     *
     * @return true if NotificationType is set.
     */
    public function isSetNotificationType()
    {
        return !is_null($this->_fields['NotificationType']['FieldValue']);
    }

    /**
     * Set the value of NotificationType, return this.
     *
     * @param notificationType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNotificationType($value)
    {
        $this->setNotificationType($value);
        return $this;
    }

    /**
     * Get the value of the Destination property.
     *
     * @return Destination Destination.
     */
    public function getDestination()
    {
        return $this->_fields['Destination']['FieldValue'];
    }

    /**
     * Set the value of the Destination property.
     *
     * @param Destination destination
     * @return this instance
     */
    public function setDestination($value)
    {
        $this->_fields['Destination']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Destination is set.
     *
     * @return true if Destination is set.
     */
    public function isSetDestination()
    {
        return !is_null($this->_fields['Destination']['FieldValue']);
    }

    /**
     * Set the value of Destination, return this.
     *
     * @param destination
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDestination($value)
    {
        $this->setDestination($value);
        return $this;
    }

    /**
     * Check the value of IsEnabled.
     *
     * @return true if IsEnabled is set to true.
     */
    public function isIsEnabled()
    {
        return $this->_fields['IsEnabled']['FieldValue'];
    }

    /**
     * Get the value of the IsEnabled property.
     *
     * @return boolean IsEnabled.
     */
    public function getIsEnabled()
    {
        return $this->_fields['IsEnabled']['FieldValue'];
    }

    /**
     * Set the value of the IsEnabled property.
     *
     * @param bool isEnabled
     * @return this instance
     */
    public function setIsEnabled($value)
    {
        $this->_fields['IsEnabled']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsEnabled is set.
     *
     * @return true if IsEnabled is set.
     */
    public function isSetIsEnabled()
    {
        return !is_null($this->_fields['IsEnabled']['FieldValue']);
    }

    /**
     * Set the value of IsEnabled, return this.
     *
     * @param isEnabled
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsEnabled($value)
    {
        $this->setIsEnabled($value);
        return $this;
    }
}
