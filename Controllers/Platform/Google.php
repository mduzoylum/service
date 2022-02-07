<?php

class Google implements Platform
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
                'google_id' => $productItem["id"],
                'google_name' => $productItem["name"],
                'google_price' => $productItem["price"],
                'google_category' => $productItem["category"]
            ];
        }
        $convert = new Convert($this->type, $_product);
        return $convert->convert();
    }
}