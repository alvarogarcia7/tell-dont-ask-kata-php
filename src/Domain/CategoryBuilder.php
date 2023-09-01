<?php

namespace Pitchart\TellDontAskKata\Domain;

class CategoryBuilder
{

    private string $name;
    private int $taxPercentage;

    function setName(string $name): CategoryBuilder
    {
        $this->name = $name;
        return $this;
    }

    public function setTaxPercentage(int $taxPercentage): CategoryBuilder
    {
        $this->taxPercentage = $taxPercentage;
        return $this;
    }

    function build(): Category
    {
        return new Category($this->name, $this->taxPercentage);
    }

}