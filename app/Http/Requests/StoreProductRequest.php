<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class StoreProductRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'sku' => ['required', Rule::unique('products')->whereNull('deleted_at'), 'max: 255'],
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
            'productType' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'sku' => 'Sku',
            'name' => 'Name',
            'price' => 'Price',
            'product_attribute' => 'Product Attribute'
        ];
    }
}
