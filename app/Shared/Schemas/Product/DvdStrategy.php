<?php
namespace App\Shared\Schemas\Product;

class DvdStrategy implements ProductTypeMethod
{
    public function productType(): string
    {
        return (string)'60 MB';
    }
}

?>
