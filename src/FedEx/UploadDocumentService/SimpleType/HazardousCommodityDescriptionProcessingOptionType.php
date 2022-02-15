<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies any special processing to be applied to the dangerous goods commodity description validation.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class HazardousCommodityDescriptionProcessingOptionType extends AbstractSimpleType
{
    const _INCLUDE_SPECIAL_PROVISIONS = 'INCLUDE_SPECIAL_PROVISIONS';
}
