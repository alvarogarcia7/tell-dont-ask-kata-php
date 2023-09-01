<?php
declare(strict_types=1);

namespace Pitchart\TellDontAskKata\Domain;

class Category
{
    private string $name;

    private float $taxPercentage;

    public function __construct(string $name, float $taxPercentage)
    {
        $this->name = $name;
        $this->taxPercentage = $taxPercentage;
    }


    /**
     * @return float
     */
    public function getTaxPercentage(): float
    {
        return $this->taxPercentage;
    }

    /**
     * @param float $taxPercentage
     * @return Category
     */
    public function setTaxPercentage(float $taxPercentage): Category
    {
        throw new \Exception("CANNOT BE USED IN PRODUCTION");
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}