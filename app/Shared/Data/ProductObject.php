<?php
declare(strict_types=1);
namespace App\Shared\Data;

class ProductObject
{
    /** @var string */
    private string $sku;

    /** @var string */
    private string $name;

    /** @var float */
    private float $price;

    /** ProductObject constructor
     * @param string $sku
     * @param string $name
     * @param float $price
     */
    public function __construct(string $sku ,string $name, float $price = 200)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

?>
