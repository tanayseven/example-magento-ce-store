<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\TestFramework\Helper\Bootstrap;

/** @var \Magento\Framework\Registry $registry */
$registry = Bootstrap::getObjectManager()->get(\Magento\Framework\Registry::class);
$registry->unregister('isSecureArea');
$registry->register('isSecureArea', true);

/** @var $quote \Magento\Quote\Model\Quote */
$quote = Bootstrap::getObjectManager()->create(\Magento\Quote\Model\Quote::class);
$quote->load('test01', 'reserved_order_id');
if ($quote->getId()) {
    $quote->delete();
}

/** @var \Magento\Catalog\Api\ProductRepositoryInterface $productRepository */
$productRepository = Bootstrap::getObjectManager()
    ->create(\Magento\Catalog\Api\ProductRepositoryInterface::class);

try {
    $product = $productRepository->get('simple', false, null, true);
    $productRepository->delete($product);
} catch (\Magento\Framework\Exception\NoSuchEntityException $exception) {
    //Product already removed
}

// Remove product stock registry data.
/** @var \Magento\CatalogInventory\Model\StockRegistryStorage $stockRegistryStorage */
$stockRegistryStorage = Bootstrap::getObjectManager()->get(
    \Magento\CatalogInventory\Model\StockRegistryStorage::class
);
$stockRegistryStorage->removeStockItem(1);
$stockRegistryStorage->removeStockStatus(1);

$registry->unregister('isSecureArea');
$registry->register('isSecureArea', false);
