<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies payment for a single aspect of a shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\SplitPaymentType|string $Type
 * @property Payment $Payment

 */
class SplitPaymentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SplitPaymentDetail';

    /**
     * Identifies the aspect of the shiipment to be paid separately.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\SplitPaymentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Specifies the form of payment to be used.
     *
     * @param Payment $payment
     * @return $this
     */
    public function setPayment(Payment $payment)
    {
        $this->values['Payment'] = $payment;
        return $this;
    }
}
