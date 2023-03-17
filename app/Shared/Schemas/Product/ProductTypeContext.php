<?php
namespace App\Shared\Schemas\Product;

class ProductTypeContext
{
    private ProductTypeMethod $strategy;

    private array $dados;

    public function __construct(string $productTypeMethod, array $dados)
    {
        $this->dados = $dados;

        $this->strategy = match($productTypeMethod) {
            "dvd" => new DvdStrategy(),
            "book" => new BookStrategy(),
            "dimension" => new FurnitureStrategy(),
            default => throw new \InvalidArgumentException('the type selected is not valid')
        };
    }

    public function productAttribute(): array
    {
        return $this->strategy->productAttribute($this->dados);
    }
}


?>
