<?php
namespace App\Shared\Schemas\Product;

class ProductTypeContext
{
    private ProductTypeMethod $strategy;

    public function __construct(string $productTypeMethod)
    {
        $this->strategy = match($productTypeMethod) {
            "dvd" => new DvdStrategy(),
            "book" => new BookStrategy(),
            "dimension" => new FurnitureStrategy(),
            default => throw new \InvalidArgumentException('the type selected is not valid')
        };
    }

    public function productType(): string
    {
        return $this->strategy->productType();
    }
}


?>
