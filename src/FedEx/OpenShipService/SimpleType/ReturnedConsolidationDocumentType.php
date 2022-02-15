<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ReturnedConsolidationDocumentType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ReturnedConsolidationDocumentType extends AbstractSimpleType
{
    const _COMMODITIES_BY_TRACKING_NUMBER_REPORT = 'COMMODITIES_BY_TRACKING_NUMBER_REPORT';
    const _CONDENSED_CRN_REPORT = 'CONDENSED_CRN_REPORT';
    const _CONSOLIDATED_COMMERCIAL_INVOICE = 'CONSOLIDATED_COMMERCIAL_INVOICE';
    const _CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT = 'CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT';
    const _CONSOLIDATED_SOLD_TO_SUMMARY_REPORT = 'CONSOLIDATED_SOLD_TO_SUMMARY_REPORT';
    const _CRN_REPORT = 'CRN_REPORT';
    const _CUSTOMS_PACKING_LIST = 'CUSTOMS_PACKING_LIST';
    const _CUSTOM_CONSOLIDATION_DOCUMENT = 'CUSTOM_CONSOLIDATION_DOCUMENT';
    const _LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT = 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT';
    const _STANDARD_BROKER_CLEARANCE_PARTY_REPORT = 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT';
}
