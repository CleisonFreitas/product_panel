<?php
namespace App\Shared\Schemas\Product;

class FurnitureStrategy implements ProductTypeMethod
{
    public function productType(): string
    {
        return '20 whxh';
    }
}

?>
