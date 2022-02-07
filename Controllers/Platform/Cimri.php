<?php

class Cimri implements Platform
{
    private $type, $product;

    public function __construct($type, $product)
    {
        $this->type = $type;
        $this->product = $product;
    }

    public function getProduct()
    {
        $_product = [];
        foreach ($this->product as $productItem) {
            $_product[] = [
                'cimri_id' => $productItem["id"],
                'cimri_name' => $productItem["name"],
                'cimri_price' => $productItem["price"],
                'cimri_category' => $productItem["category"]
            ];
        }
        $convert = new Convert($this->type, $_product);
        return $convert->convert();
    }
}