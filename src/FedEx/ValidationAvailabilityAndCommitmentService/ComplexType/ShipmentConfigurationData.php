<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies data structures that may be re-used multiple times with s single shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property DangerousGoodsDetail[] $DangerousGoodsPackageConfigurations

 */
class ShipmentConfigurationData extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentConfigurationData';

    /**
     * Specifies the data that is common to dangerous goods packages in the shipment. This is populated when the shipment contains packages with identical dangerous goods commodities.
     *
     * @param DangerousGoodsDetail[] $dangerousGoodsPackageConfigurations
     * @return $this
     */
    public function setDangerousGoodsPackageConfigurations(array $dangerousGoodsPackageConfigurations)
    {
        $this->values['DangerousGoodsPackageConfigurations'] = $dangerousGoodsPackageConfigurations;
        return $this;
    }
}
