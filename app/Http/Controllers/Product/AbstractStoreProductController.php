<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

abstract class AbstractStoreProductController extends Controller
{
    abstract public function createData(StoreProductRequest $request): JsonResponse;
}
