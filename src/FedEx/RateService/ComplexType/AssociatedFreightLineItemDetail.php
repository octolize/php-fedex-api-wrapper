<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AssociatedFreightLineItemDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Id

 */
class AssociatedFreightLineItemDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AssociatedFreightLineItemDetail';

    /**
     * A freight line item identifier referring to a freight shipment line item that describes goods contained within this handling unit.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }
}
