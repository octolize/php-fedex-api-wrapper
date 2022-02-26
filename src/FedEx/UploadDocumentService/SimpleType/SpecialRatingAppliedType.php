<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SpecialRatingAppliedType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class SpecialRatingAppliedType extends AbstractSimpleType
{
    const _FEDEX_ONE_RATE = 'FEDEX_ONE_RATE';
    const _FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    const _IMPORT_PRICING = 'IMPORT_PRICING';
}