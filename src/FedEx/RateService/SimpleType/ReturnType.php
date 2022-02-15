<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ReturnType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ReturnType extends AbstractSimpleType
{
    const _FEDEX_TAG = 'FEDEX_TAG';
    const _PENDING = 'PENDING';
    const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
}
