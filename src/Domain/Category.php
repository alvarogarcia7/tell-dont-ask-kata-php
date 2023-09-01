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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}