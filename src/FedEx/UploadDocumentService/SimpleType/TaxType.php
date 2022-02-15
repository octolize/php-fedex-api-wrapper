<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TaxType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class TaxType extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _GST = 'GST';
    const _HST = 'HST';
    const _INTRACOUNTRY = 'INTRACOUNTRY';
    const _OTHER = 'OTHER';
    const _PST = 'PST';
    const _VAT = 'VAT';
}
