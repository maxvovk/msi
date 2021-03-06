<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryConfigurationApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents a configuration object
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface SourceItemConfigurationInterface extends ExtensibleDataInterface
{
    /**
     * Constant for fields in data array
     */
    const SOURCE_ID = 'source_id';
    const SKU = 'sku';
    const INVENTORY_NOTIFY_QTY = 'notify_stock_qty';

    /**
     * Get source id
     *
     * @return int|null
     */
    public function getSourceId();

    /**
     * Set source id
     *
     * @param int $sourceId
     * @return void
     */
    public function setSourceId(int $sourceId);

    /**
     * Get notify stock qty
     *
     * @return float|null
     */
    public function getNotifyStockQty();

    /**
     * Set notify stock qty
     *
     * @param float $quantity
     * @return void
     */
    public function setNotifyStockQty($quantity);

    /**
     * Get SKU
     *
     * @return string|null
     */
    public function getSku();

    /**
     * Set SKU
     *
     * @param string $sku
     * @return void
     */
    public function setSku(string $sku);

    /**
     * Retrieve existing extension attributes object
     *
     * Null for return is specified for proper work SOAP requests parser
     *
     * @return \Magento\InventoryConfigurationApi\Api\Data\SourceItemConfigurationExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     *
     * @param \Magento\InventoryConfigurationApi\Api\Data\SourceItemConfigurationExtensionInterface $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(SourceItemConfigurationExtensionInterface $extensionAttributes);
}
