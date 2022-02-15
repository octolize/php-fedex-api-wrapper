<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentNamingType extends AbstractSimpleType
{
    const _FAST = 'FAST';
    const _LEGACY_FXRS = 'LEGACY_FXRS';
}
