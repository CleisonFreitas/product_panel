<?php
namespace App\Shared\Schemas\Product;

class FurnitureStrategy implements ProductTypeMethod
{
    public function productAttribute(array $dados): array
    {
        return $dados;
    }
}

?>
