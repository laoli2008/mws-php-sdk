<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * PartneredLtlDataOutput
 *
 * Properties:
 * <ul>
 * <li>Contact: Contact</li>
 * <li>BoxCount: int</li>
 * <li>SellerFreightClass: string</li>
 * <li>FreightReadyDate: string</li>
 * <li>PalletList: PalletList</li>
 * <li>TotalWeight: Weight</li>
 * <li>SellerDeclaredValue: Amount</li>
 * <li>AmazonCalculatedValue: Amount</li>
 * <li>PreviewPickupDate: string</li>
 * <li>PreviewDeliveryDate: string</li>
 * <li>PreviewFreightClass: string</li>
 * <li>AmazonReferenceId: string</li>
 * <li>IsBillOfLadingAvailable: bool</li>
 * <li>PartneredEstimate: PartneredEstimate</li>
 * <li>CarrierName: string</li>
 * </ul>
 */
class PartneredLtlDataOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Contact'                 => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Contact'),
            'BoxCount'                => array('FieldValue' => null, 'FieldType' => 'int'),
            'SellerFreightClass'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'FreightReadyDate'        => array('FieldValue' => null, 'FieldType' => 'string'),
            'PalletList'              => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\PalletList'),
            'TotalWeight'             => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Weight'),
            'SellerDeclaredValue'     => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Amount'),
            'AmazonCalculatedValue'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Amount'),
            'PreviewPickupDate'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'PreviewDeliveryDate'     => array('FieldValue' => null, 'FieldType' => 'string'),
            'PreviewFreightClass'     => array('FieldValue' => null, 'FieldType' => 'string'),
            'AmazonReferenceId'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'IsBillOfLadingAvailable' => array('FieldValue' => null, 'FieldType' => 'bool'),
            'PartneredEstimate'       => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\PartneredEstimate'),
            'CarrierName'             => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Contact property.
     *
     * @return Contact Contact.
     */
    public function getContact()
    {
        return $this->_fields['Contact']['FieldValue'];
    }

    /**
     * Set the value of the Contact property.
     *
     * @param Contact contact
     * @return this instance
     */
    public function setContact($value)
    {
        $this->_fields['Contact']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Contact is set.
     *
     * @return true if Contact is set.
     */
    public function isSetContact()
    {
        return !is_null($this->_fields['Contact']['FieldValue']);
    }

    /**
     * Set the value of Contact, return this.
     *
     * @param contact
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withContact($value)
    {
        $this->setContact($value);
        return $this;
    }

    /**
     * Get the value of the BoxCount property.
     *
     * @return long BoxCount.
     */
    public function getBoxCount()
    {
        return $this->_fields['BoxCount']['FieldValue'];
    }

    /**
     * Set the value of the BoxCount property.
     *
     * @param int boxCount
     * @return this instance
     */
    public function setBoxCount($value)
    {
        $this->_fields['BoxCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BoxCount is set.
     *
     * @return true if BoxCount is set.
     */
    public function isSetBoxCount()
    {
        return !is_null($this->_fields['BoxCount']['FieldValue']);
    }

    /**
     * Set the value of BoxCount, return this.
     *
     * @param boxCount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBoxCount($value)
    {
        $this->setBoxCount($value);
        return $this;
    }

    /**
     * Get the value of the SellerFreightClass property.
     *
     * @return String SellerFreightClass.
     */
    public function getSellerFreightClass()
    {
        return $this->_fields['SellerFreightClass']['FieldValue'];
    }

    /**
     * Set the value of the SellerFreightClass property.
     *
     * @param string sellerFreightClass
     * @return this instance
     */
    public function setSellerFreightClass($value)
    {
        $this->_fields['SellerFreightClass']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFreightClass is set.
     *
     * @return true if SellerFreightClass is set.
     */
    public function isSetSellerFreightClass()
    {
        return !is_null($this->_fields['SellerFreightClass']['FieldValue']);
    }

    /**
     * Set the value of SellerFreightClass, return this.
     *
     * @param sellerFreightClass
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerFreightClass($value)
    {
        $this->setSellerFreightClass($value);
        return $this;
    }

    /**
     * Get the value of the FreightReadyDate property.
     *
     * @return String FreightReadyDate.
     */
    public function getFreightReadyDate()
    {
        return $this->_fields['FreightReadyDate']['FieldValue'];
    }

    /**
     * Set the value of the FreightReadyDate property.
     *
     * @param string freightReadyDate
     * @return this instance
     */
    public function setFreightReadyDate($value)
    {
        $this->_fields['FreightReadyDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FreightReadyDate is set.
     *
     * @return true if FreightReadyDate is set.
     */
    public function isSetFreightReadyDate()
    {
        return !is_null($this->_fields['FreightReadyDate']['FieldValue']);
    }

    /**
     * Set the value of FreightReadyDate, return this.
     *
     * @param freightReadyDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFreightReadyDate($value)
    {
        $this->setFreightReadyDate($value);
        return $this;
    }

    /**
     * Get the value of the PalletList property.
     *
     * @return PalletList PalletList.
     */
    public function getPalletList()
    {
        return $this->_fields['PalletList']['FieldValue'];
    }

    /**
     * Set the value of the PalletList property.
     *
     * @param PalletList palletList
     * @return this instance
     */
    public function setPalletList($value)
    {
        $this->_fields['PalletList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PalletList is set.
     *
     * @return true if PalletList is set.
     */
    public function isSetPalletList()
    {
        return !is_null($this->_fields['PalletList']['FieldValue']);
    }

    /**
     * Set the value of PalletList, return this.
     *
     * @param palletList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPalletList($value)
    {
        $this->setPalletList($value);
        return $this;
    }

    /**
     * Get the value of the TotalWeight property.
     *
     * @return Weight TotalWeight.
     */
    public function getTotalWeight()
    {
        return $this->_fields['TotalWeight']['FieldValue'];
    }

    /**
     * Set the value of the TotalWeight property.
     *
     * @param Weight totalWeight
     * @return this instance
     */
    public function setTotalWeight($value)
    {
        $this->_fields['TotalWeight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalWeight is set.
     *
     * @return true if TotalWeight is set.
     */
    public function isSetTotalWeight()
    {
        return !is_null($this->_fields['TotalWeight']['FieldValue']);
    }

    /**
     * Set the value of TotalWeight, return this.
     *
     * @param totalWeight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalWeight($value)
    {
        $this->setTotalWeight($value);
        return $this;
    }

    /**
     * Get the value of the SellerDeclaredValue property.
     *
     * @return Amount SellerDeclaredValue.
     */
    public function getSellerDeclaredValue()
    {
        return $this->_fields['SellerDeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the SellerDeclaredValue property.
     *
     * @param Amount sellerDeclaredValue
     * @return this instance
     */
    public function setSellerDeclaredValue($value)
    {
        $this->_fields['SellerDeclaredValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerDeclaredValue is set.
     *
     * @return true if SellerDeclaredValue is set.
     */
    public function isSetSellerDeclaredValue()
    {
        return !is_null($this->_fields['SellerDeclaredValue']['FieldValue']);
    }

    /**
     * Set the value of SellerDeclaredValue, return this.
     *
     * @param sellerDeclaredValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerDeclaredValue($value)
    {
        $this->setSellerDeclaredValue($value);
        return $this;
    }

    /**
     * Get the value of the AmazonCalculatedValue property.
     *
     * @return Amount AmazonCalculatedValue.
     */
    public function getAmazonCalculatedValue()
    {
        return $this->_fields['AmazonCalculatedValue']['FieldValue'];
    }

    /**
     * Set the value of the AmazonCalculatedValue property.
     *
     * @param Amount amazonCalculatedValue
     * @return this instance
     */
    public function setAmazonCalculatedValue($value)
    {
        $this->_fields['AmazonCalculatedValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonCalculatedValue is set.
     *
     * @return true if AmazonCalculatedValue is set.
     */
    public function isSetAmazonCalculatedValue()
    {
        return !is_null($this->_fields['AmazonCalculatedValue']['FieldValue']);
    }

    /**
     * Set the value of AmazonCalculatedValue, return this.
     *
     * @param amazonCalculatedValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonCalculatedValue($value)
    {
        $this->setAmazonCalculatedValue($value);
        return $this;
    }

    /**
     * Get the value of the PreviewPickupDate property.
     *
     * @return String PreviewPickupDate.
     */
    public function getPreviewPickupDate()
    {
        return $this->_fields['PreviewPickupDate']['FieldValue'];
    }

    /**
     * Set the value of the PreviewPickupDate property.
     *
     * @param string previewPickupDate
     * @return this instance
     */
    public function setPreviewPickupDate($value)
    {
        $this->_fields['PreviewPickupDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PreviewPickupDate is set.
     *
     * @return true if PreviewPickupDate is set.
     */
    public function isSetPreviewPickupDate()
    {
        return !is_null($this->_fields['PreviewPickupDate']['FieldValue']);
    }

    /**
     * Set the value of PreviewPickupDate, return this.
     *
     * @param previewPickupDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPreviewPickupDate($value)
    {
        $this->setPreviewPickupDate($value);
        return $this;
    }

    /**
     * Get the value of the PreviewDeliveryDate property.
     *
     * @return String PreviewDeliveryDate.
     */
    public function getPreviewDeliveryDate()
    {
        return $this->_fields['PreviewDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the PreviewDeliveryDate property.
     *
     * @param string previewDeliveryDate
     * @return this instance
     */
    public function setPreviewDeliveryDate($value)
    {
        $this->_fields['PreviewDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PreviewDeliveryDate is set.
     *
     * @return true if PreviewDeliveryDate is set.
     */
    public function isSetPreviewDeliveryDate()
    {
        return !is_null($this->_fields['PreviewDeliveryDate']['FieldValue']);
    }

    /**
     * Set the value of PreviewDeliveryDate, return this.
     *
     * @param previewDeliveryDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPreviewDeliveryDate($value)
    {
        $this->setPreviewDeliveryDate($value);
        return $this;
    }

    /**
     * Get the value of the PreviewFreightClass property.
     *
     * @return String PreviewFreightClass.
     */
    public function getPreviewFreightClass()
    {
        return $this->_fields['PreviewFreightClass']['FieldValue'];
    }

    /**
     * Set the value of the PreviewFreightClass property.
     *
     * @param string previewFreightClass
     * @return this instance
     */
    public function setPreviewFreightClass($value)
    {
        $this->_fields['PreviewFreightClass']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PreviewFreightClass is set.
     *
     * @return true if PreviewFreightClass is set.
     */
    public function isSetPreviewFreightClass()
    {
        return !is_null($this->_fields['PreviewFreightClass']['FieldValue']);
    }

    /**
     * Set the value of PreviewFreightClass, return this.
     *
     * @param previewFreightClass
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPreviewFreightClass($value)
    {
        $this->setPreviewFreightClass($value);
        return $this;
    }

    /**
     * Get the value of the AmazonReferenceId property.
     *
     * @return String AmazonReferenceId.
     */
    public function getAmazonReferenceId()
    {
        return $this->_fields['AmazonReferenceId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonReferenceId property.
     *
     * @param string amazonReferenceId
     * @return this instance
     */
    public function setAmazonReferenceId($value)
    {
        $this->_fields['AmazonReferenceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonReferenceId is set.
     *
     * @return true if AmazonReferenceId is set.
     */
    public function isSetAmazonReferenceId()
    {
        return !is_null($this->_fields['AmazonReferenceId']['FieldValue']);
    }

    /**
     * Set the value of AmazonReferenceId, return this.
     *
     * @param amazonReferenceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonReferenceId($value)
    {
        $this->setAmazonReferenceId($value);
        return $this;
    }

    /**
     * Check the value of IsBillOfLadingAvailable.
     *
     * @return true if IsBillOfLadingAvailable is set to true.
     */
    public function isIsBillOfLadingAvailable()
    {
        return $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }

    /**
     * Get the value of the IsBillOfLadingAvailable property.
     *
     * @return boolean IsBillOfLadingAvailable.
     */
    public function getIsBillOfLadingAvailable()
    {
        return $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }

    /**
     * Set the value of the IsBillOfLadingAvailable property.
     *
     * @param bool isBillOfLadingAvailable
     * @return this instance
     */
    public function setIsBillOfLadingAvailable($value)
    {
        $this->_fields['IsBillOfLadingAvailable']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsBillOfLadingAvailable is set.
     *
     * @return true if IsBillOfLadingAvailable is set.
     */
    public function isSetIsBillOfLadingAvailable()
    {
        return !is_null($this->_fields['IsBillOfLadingAvailable']['FieldValue']);
    }

    /**
     * Set the value of IsBillOfLadingAvailable, return this.
     *
     * @param isBillOfLadingAvailable
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsBillOfLadingAvailable($value)
    {
        $this->setIsBillOfLadingAvailable($value);
        return $this;
    }

    /**
     * Get the value of the PartneredEstimate property.
     *
     * @return PartneredEstimate PartneredEstimate.
     */
    public function getPartneredEstimate()
    {
        return $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of the PartneredEstimate property.
     *
     * @param PartneredEstimate partneredEstimate
     * @return this instance
     */
    public function setPartneredEstimate($value)
    {
        $this->_fields['PartneredEstimate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredEstimate is set.
     *
     * @return true if PartneredEstimate is set.
     */
    public function isSetPartneredEstimate()
    {
        return !is_null($this->_fields['PartneredEstimate']['FieldValue']);
    }

    /**
     * Set the value of PartneredEstimate, return this.
     *
     * @param partneredEstimate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredEstimate($value)
    {
        $this->setPartneredEstimate($value);
        return $this;
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
}
