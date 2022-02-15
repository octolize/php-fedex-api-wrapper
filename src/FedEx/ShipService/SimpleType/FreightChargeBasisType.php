<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightChargeBasisType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightChargeBasisType extends AbstractSimpleType
{
    const _CWT = 'CWT';
    const _FLAT = 'FLAT';
    const _MINIMUM = 'MINIMUM';
}
