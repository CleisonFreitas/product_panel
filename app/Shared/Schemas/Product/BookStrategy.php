<?php
namespace App\Shared\Schemas\Product;

class BookStrategy implements ProductTypeMethod
{
    public function productAttribute(array $dados): array
    {
        return $dados;
    }
}


?>
