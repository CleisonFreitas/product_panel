<?php
declare(strict_types=1);
namespace App\Shared\Repositories;

use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Shared\Data\ProductObject;
use App\Shared\Interfaces\CreateProductInterface;
use App\Shared\Schemas\Product\ProductTypeContext;
use App\Shared\Util\ProductSave;
use Illuminate\Http\JsonResponse;

class CreateProductRepository implements CreateProductInterface
{
    /** @var ProductSave $productSave */
    protected ProductSave $productSave;

    protected Product $product;

    public function __construct(ProductSave $productSave, Product $product)
    {
        $this->productSave = $productSave;
        $this->product = $product;
    }
    public function createProduct(StoreProductRequest $request): JsonResponse
    {
        $object = new ProductObject(
            (string)$request->input('sku'),
            (string)$request->input('name'),
            (float)$request->input('price'),
            (string)$request->input('productType')
        );

        $productType = new ProductTypeContext($request->input('productType'));

        $product = $this->productSave->execute($this->product,$object,$productType->productType());

        return response()->json(new ProductResource($product));

    }
}

?>
