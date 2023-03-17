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
     * @param ProductTypeContext $productAttribute
     */
    public function execute(Product $product, ProductObject $productObject, ProductTypeContext $productAttribute)
    {
        $product->sku = $productObject->getSku();
        $product->name = $productObject->getName();
        $product->price = $productObject->getPrice();
        $product->product_type = $productObject->getProductType();
        $product->product_attribute = $productAttribute->productAttribute();
        return $this->handler($product);
    }

}
