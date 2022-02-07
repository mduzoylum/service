<?php

class Json implements Type
{
    private $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getType()
    {
        echo json_encode($this->product);
    }
}