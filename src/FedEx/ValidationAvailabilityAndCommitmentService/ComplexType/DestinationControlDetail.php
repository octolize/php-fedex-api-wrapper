<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to complete the Destionation Control Statement for US exports.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DestinationControlStatementType|string[] $StatementTypes
 * @property string $DestinationCountries
 * @property string $EndUser

 */
class DestinationControlDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DestinationControlDetail';

    /**
     * Set StatementTypes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DestinationControlStatementType[]|string[] $statementTypes
     * @return $this
     */
    public function setStatementTypes(array $statementTypes)
    {
        $this->values['StatementTypes'] = $statementTypes;
        return $this;
    }

    /**
     * Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $destinationCountries
     * @return $this
     */
    public function setDestinationCountries($destinationCountries)
    {
        $this->values['DestinationCountries'] = $destinationCountries;
        return $this;
    }

    /**
     * Name of end user, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $endUser
     * @return $this
     */
    public function setEndUser($endUser)
    {
        $this->values['EndUser'] = $endUser;
        return $this;
    }
}
