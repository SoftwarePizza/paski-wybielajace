<?php

namespace FHB\Prestashop\Services;

use Kika\ApiClient\Products;

final class ProductApi
{
    /** @var Products */
    private $products;

    public function __construct()
    {
        $this->products = new Products(RestApiFactory::create());
    }

    public function add(ProductData $product)
    {
        $this->products->create([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'ean' => $product->getEan(),
            'photoUrl' => $product->getPhotoUrl()
        ]);
    }

    public function update(ProductData $product)
    {
        $this->products->update($product->getId(), [
            'name' => $product->getName(),
            'ean' => $product->getEan(),
            'photoUrl' => $product->getPhotoUrl()
        ]);
    }

    /**
     * @return ProductData[]
     */
    public function getAll()
    {
        $products = [];
        $page = 1;
        $count = 0;

        do {
            $result = $this->products->readAll($page);

            foreach ($result->_embedded->products as $product) {
                $products[(string) $product->id] = new ProductData(
                    $product->id,
                    $product->ean,
                    $product->photoUrl,
                    $product->notifyLink,
                    $product->stockQuantity,
                    $product->freeQuantity
                );
            }

            $page++;
            $count += $result->count;
        }
        while ($count < $result->total);

        return $products;
    }
}