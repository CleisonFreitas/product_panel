<?php
namespace App\Shared\Util;

use App\Models\Product;
use App\Shared\Data\ProductObject;

class ProductSave extends AbstractCreateRecord
{
    /**
     * @param Product $product
     * @param ProductObject $productObject
     */
    public function execute(Product $product, ProductObject $productObject)
    {
        $product->sku = $productObject->getSku();
        $product->name = $productObject->getname();
        $product->price = $productObject->getPrice();
        $product->product_attribute = 22.10;

        return $this->handler($product);
    }

}
