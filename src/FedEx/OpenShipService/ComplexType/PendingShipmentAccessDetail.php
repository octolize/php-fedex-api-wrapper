<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes how and when a pending shipment may be accessed for completion.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property PendingShipmentAccessorDetail[] $AccessorDetails

 */
class PendingShipmentAccessDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PendingShipmentAccessDetail';

    /**
     * Set AccessorDetails
     *
     * @param PendingShipmentAccessorDetail[] $accessorDetails
     * @return $this
     */
    public function setAccessorDetails(array $accessorDetails)
    {
        $this->values['AccessorDetails'] = $accessorDetails;
        return $this;
    }
}
