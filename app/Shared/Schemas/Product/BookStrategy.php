<?php
namespace App\Shared\Schemas\Product;

class BookStrategy implements ProductTypeMethod
{
    public function productType(): string
    {
        return '200 paginas';
    }
}


?>
