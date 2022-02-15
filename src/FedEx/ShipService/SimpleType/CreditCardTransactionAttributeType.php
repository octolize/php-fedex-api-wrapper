<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CreditCardTransactionAttributeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CreditCardTransactionAttributeType extends AbstractSimpleType
{
    const _ORIGINATED_BY_AUTHORIZED_PERSONNEL = 'ORIGINATED_BY_AUTHORIZED_PERSONNEL';
    const _ORIGINATED_BY_UNAUTHORIZED_PERSONNEL = 'ORIGINATED_BY_UNAUTHORIZED_PERSONNEL';
}
