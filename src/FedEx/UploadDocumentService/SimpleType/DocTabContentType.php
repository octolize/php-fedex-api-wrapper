<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DocTabContentType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class DocTabContentType extends AbstractSimpleType
{
    const _BARCODED = 'BARCODED';
    const _CUSTOM = 'CUSTOM';
    const _MINIMUM = 'MINIMUM';
    const _STANDARD = 'STANDARD';
    const _ZONE001 = 'ZONE001';
}