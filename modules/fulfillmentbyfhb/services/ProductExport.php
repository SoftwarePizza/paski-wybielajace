<?php

namespace FHB\Prestashop\Services;

use Attribute;
use AttributeGroup;
use Combination;
use Context;
use Product;

final class ProductExport
{
    /** @var ProductApi */
    private $productApi;

    /** @var null|array */
    private $exportedProducts;

    public function __construct()
    {
        $this->productApi = new ProductApi();
    }

    public function exportAll()
    {
        $products = Product::getProducts(1, 0, null, 'id_product', 'ASC');

        foreach ($products as $product) {
            $combinations = Product::getProductAttributesIds($product['id_product']);

            if (count($combinations) > 0) {
                foreach ($combinations as $combinationId) {
                    $this->exportCombination($product, new Combination((int) $combinationId['id_product_attribute']));
                }
            } else {
                $this->exportProduct($product);
            }
        }
    }

    public function exportProduct(array $product)
    {
        $productData = new ProductData(
            $product['reference'],
            $product['ean13'],
            $product['name'],
            null
        );

        if ($this->isExported($product['reference'])) {
            $this->productApi->update($productData);
        } else {
            $this->productApi->add($productData);
            $this->exportedProducts[$productData->getId()] = true;
        }
    }

    public function exportCombination(array $product, Combination $combination)
    {
        if ($combination->reference === '') {
            return;
        }

        $productName = $product['name'];
        $languageId = Context::getContext()->language->id;

        foreach ($combination->getAttributesName($languageId) as $attributeData) {
            $attribute = new Attribute($attributeData['id_attribute']);
            $attributeGroup = new AttributeGroup($attribute->id_attribute_group);

            $productName = sprintf('%s, %s: %s',
                $productName,
                $attributeGroup->name[$languageId],
                $attribute->name[$languageId]
            );
        }

        $productData = new ProductData(
            $combination->reference,
            $combination->ean13,
            $productName,
            null
        );

        if ($this->isExported($combination->reference)) {
            $this->productApi->update($productData);
        } else {
            $this->productApi->add($productData);
            $this->exportedProducts[$productData->getId()] = true;
        }
    }

    public function getExportedProductCount()
    {
        return count($this->productApi->getAll());
    }

    public function isExported($reference)
    {
        if ($this->exportedProducts === null) {
            $this->exportedProducts = $this->productApi->getAll();
        }

        return isset($this->exportedProducts[$reference]);
    }
}