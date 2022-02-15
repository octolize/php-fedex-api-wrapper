<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ShippingDocumentDispositionType|string $DispositionType
 * @property \FedEx\OpenShipService\SimpleType\ShippingDocumentGroupingType|string $Grouping
 * @property ShippingDocumentStorageDetail $StorageDetail
 * @property ShippingDocumentEMailDetail $EMailDetail
 * @property ShippingDocumentPrintDetail $PrintDetail

 */
class ShippingDocumentDispositionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentDispositionDetail';

    /**
     * Values in this field specify how to create and return the document.
     *
     * @param \FedEx\OpenShipService\SimpleType\ShippingDocumentDispositionType|string $dispositionType
     * @return $this
     */
    public function setDispositionType($dispositionType)
    {
        $this->values['DispositionType'] = $dispositionType;
        return $this;
    }

    /**
     * Specifies how to organize all documents of this type.
     *
     * @param \FedEx\OpenShipService\SimpleType\ShippingDocumentGroupingType|string $grouping
     * @return $this
     */
    public function setGrouping($grouping)
    {
        $this->values['Grouping'] = $grouping;
        return $this;
    }

    /**
     * Specifies how to store document images.
     *
     * @param ShippingDocumentStorageDetail $storageDetail
     * @return $this
     */
    public function setStorageDetail(ShippingDocumentStorageDetail $storageDetail)
    {
        $this->values['StorageDetail'] = $storageDetail;
        return $this;
    }

    /**
     * Specifies how to e-mail document images.
     *
     * @param ShippingDocumentEMailDetail $eMailDetail
     * @return $this
     */
    public function setEMailDetail(ShippingDocumentEMailDetail $eMailDetail)
    {
        $this->values['EMailDetail'] = $eMailDetail;
        return $this;
    }

    /**
     * Specifies how a queued document is to be printed.
     *
     * @param ShippingDocumentPrintDetail $printDetail
     * @return $this
     */
    public function setPrintDetail(ShippingDocumentPrintDetail $printDetail)
    {
        $this->values['PrintDetail'] = $printDetail;
        return $this;
    }
}
