<?php
namespace App\Shared\Schemas\Product;

class DvdStrategy implements ProductTypeMethod
{
    public function productAttribute(array $dados): array
    {
        return $dados;
    }
}

?>
