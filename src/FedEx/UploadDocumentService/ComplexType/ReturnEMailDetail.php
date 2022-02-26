<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReturnEMailDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $MerchantPhoneNumber
 * @property \FedEx\UploadDocumentService\SimpleType\ReturnEMailAllowedSpecialServiceType|string[] $AllowedSpecialServices

 */
class ReturnEMailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ReturnEMailDetail';

    /**
     * Set MerchantPhoneNumber
     *
     * @param string $merchantPhoneNumber
     * @return $this
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->values['MerchantPhoneNumber'] = $merchantPhoneNumber;
        return $this;
    }

    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ReturnEMailAllowedSpecialServiceType[]|string[] $allowedSpecialServices
     * @return $this
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices)
    {
        $this->values['AllowedSpecialServices'] = $allowedSpecialServices;
        return $this;
    }
}