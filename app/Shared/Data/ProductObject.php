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

    /** @var string $productType */
    private string $productType;

    /** @var array $productAttribute */
    private array $productAttribute;

    /** ProductObject constructor
     * @param string $sku
     * @param string $name
     * @param float $price
     * @param string $productType
     * @param array $productAttribute
     */
    public function __construct(
        string $sku,
        string $name,
        float $price,
        string $productType,
        array $productAttribute
        )
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
        $this->productAttribute = $productAttribute;
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

    public function getProductType(): string
    {
        return $this->productType;
    }

    public function getProductAttribute(): array
    {
        return $this->productAttribute;
    }
}

?>
