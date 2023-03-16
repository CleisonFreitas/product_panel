<?php
namespace App\Shared\Interfaces;

use App\Http\Requests\StoreProductRequest;

interface CreateProductInterface
{
    public function createProduct(StoreProductRequest $request);
}

?>
