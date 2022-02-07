<?php

class Facebook implements Platform
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
                'face_id' => $productItem["id"],
                'face_name' => $productItem["name"],
                'face_price' => $productItem["price"],
                'face_category' => $productItem["category"]
            ];
        }
        $convert = new Convert($this->type, $_product);
        return $convert->convert();
    }
}