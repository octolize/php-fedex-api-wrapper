<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerSpecifiedLabelGenerationOptionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CustomerSpecifiedLabelGenerationOptionType extends AbstractSimpleType
{
    const _CONTENT_ON_SHIPPING_LABEL_ONLY = 'CONTENT_ON_SHIPPING_LABEL_ONLY';
    const _CONTENT_ON_SHIPPING_LABEL_PREFERRED = 'CONTENT_ON_SHIPPING_LABEL_PREFERRED';
    const _CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY = 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY';
}