<?php
namespace App\Shared\Util;

use App\Models\Product;
use App\Shared\Data\ProductObject;
use App\Shared\Schemas\Product\ProductTypeContext;

class ProductSave extends AbstractCreateRecord
{
    /**
     * @param Product $product
     * @param ProductObject $productObject
     */
    public function execute(Product $product, ProductObject $productObject, string $productType)
    {
        $product->sku = $productObject->getSku();
        $product->name = $productObject->getname();
        $product->price = $productObject->getPrice();
        $product->product_attribute = $productType;

        return $this->handler($product);
    }

}
