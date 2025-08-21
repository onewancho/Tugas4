<?php

//Membuat Object dari barang sekitar kita

class Tumbler{
    function __construct(public string $color, public float $capacity, public string $material, public string $height, public string $brand, private string $owner) {}

    public function getOwner() {
        return $this->owner; 
    }
}

$tumbler = new Tumbler('Black', 500, 'Stainless Steel', '15cm', 'Hactiv8', 'Wawan');
print_r($tumbler);
print_r($tumbler->getOwner());