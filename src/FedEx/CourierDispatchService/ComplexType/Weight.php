<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property \FedEx\CourierDispatchService\SimpleType\WeightUnits|string $Units
 * @property float $Value

 */
class Weight extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value. See WeightUnits for the valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\WeightUnits|string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }

    /**
     * Identifies the weight value of the package.
     *
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
