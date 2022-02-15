<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UploadDocumentType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentType extends AbstractSimpleType
{
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _ETD_LABEL = 'ETD_LABEL';
    const _OTHER = 'OTHER';
    const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    const _USMCA_CERTIFICATION_OF_ORIGIN = 'USMCA_CERTIFICATION_OF_ORIGIN';
    const _USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN = 'USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN';
}
