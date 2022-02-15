<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This indicates the different statements, declarations, acts, and certifications that may apply to a shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsDeclarationStatementType extends AbstractSimpleType
{
    const _USMCA_LOW_VALUE = 'USMCA_LOW_VALUE';
}
