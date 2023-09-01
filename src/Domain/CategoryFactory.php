<?php

namespace Pitchart\TellDontAskKata\Domain;

use Pitchart\TellDontAskKata\Domain\Category;

class CategoryFactory
{
    private string $name;

    /**
     * @param string $name
     * @return CategoryFactory
     */
    public function setName(string $name): CategoryFactory
    {
        $this->name = $name;
        return $this;
    }

    public function setTaxPercentage(float $taxPercentage): Category
    {
        return new Category($this->name, $taxPercentage);
    }

}