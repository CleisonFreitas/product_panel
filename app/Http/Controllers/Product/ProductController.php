<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Product\AbstractStoreProductController;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Response;
use App\Shared\Interfaces\CreateProductInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends AbstractStoreProductController
{
    /** @var CreateProductInterface $orderRepository*/
    private CreateProductInterface $createProductRepository;

    /**
     * @param CreateProductInterface $createProductRepository;
     */
    public function __construct(CreateProductInterface $createProductRepository)
    {
        $this->createProductRepository = $createProductRepository;
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request;
     * @return JsonResponse
     */
    public function createData(StoreProductRequest $request): JsonResponse
    {
        try{
            return response()->json(
                [
                    'data' => $this->createProductRepository->createProduct($request)
                ],
                Response::HTTP_CREATED
            );
        }catch(\Exception $ex) {
            return response()->json($ex,404);
        }
    }

}
