<?php

//Membuat Object dari barang sekitar kita

class Tumbler{
    function __construct(public string $color, public float $capacity, public string $material, public string $height, public string $brand) {}
}

$tumbler = new Tumbler('Black', 500, 'Stainless Steel', '15cm', 'Hactiv8');
print_r($tumbler);