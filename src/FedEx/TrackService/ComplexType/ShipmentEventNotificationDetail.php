<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentEventNotificationDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\ShipmentNotificationAggregationType|string $AggregationType
 * @property string $PersonalMessage
 * @property ShipmentEventNotificationSpecification[] $EventNotifications

 */
class ShipmentEventNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentEventNotificationDetail';

    /**
     * Set AggregationType
     *
     * @param \FedEx\TrackService\SimpleType\ShipmentNotificationAggregationType|string $aggregationType
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->values['AggregationType'] = $aggregationType;
        return $this;
    }

    /**
     * Set PersonalMessage
     *
     * @param string $personalMessage
     * @return $this
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->values['PersonalMessage'] = $personalMessage;
        return $this;
    }

    /**
     * Set EventNotifications
     *
     * @param ShipmentEventNotificationSpecification[] $eventNotifications
     * @return $this
     */
    public function setEventNotifications(array $eventNotifications)
    {
        $this->values['EventNotifications'] = $eventNotifications;
        return $this;
    }
}
