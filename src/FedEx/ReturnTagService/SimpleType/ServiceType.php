<?php
namespace FedEx\ReturnTagService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ServiceType extends AbstractSimpleType
{
    const _EUROPE_FIRST_INTERNATIONAL_PRIORITY = 'EUROPE_FIRST_INTERNATIONAL_PRIORITY';
    const _FEDEX_1_DAY_FREIGHT = 'FEDEX_1_DAY_FREIGHT';
    const _FEDEX_2_DAY = 'FEDEX_2_DAY';
    const _FEDEX_2_DAY_FREIGHT = 'FEDEX_2_DAY_FREIGHT';
    const _FEDEX_3_DAY_FREIGHT = 'FEDEX_3_DAY_FREIGHT';
    const _FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';
    const _GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
    const _INTERNATIONAL_DISTRIBUTION_FREIGHT = 'INTERNATIONAL_DISTRIBUTION_FREIGHT';
    const _INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';
    const _INTERNATIONAL_ECONOMY_DISTRIBUTION = 'INTERNATIONAL_ECONOMY_DISTRIBUTION';
    const _INTERNATIONAL_ECONOMY_FREIGHT = 'INTERNATIONAL_ECONOMY_FREIGHT';
    const _INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';
    const _INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';
    const _INTERNATIONAL_PRIORITY_DISTRIBUTION = 'INTERNATIONAL_PRIORITY_DISTRIBUTION';
    const _INTERNATIONAL_PRIORITY_FREIGHT = 'INTERNATIONAL_PRIORITY_FREIGHT';
    const _INTERNATIONAL_PRIORITY_PLUS = 'INTERNATIONAL_PRIORITY_PLUS';
    const _PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';
    const _STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';
}
