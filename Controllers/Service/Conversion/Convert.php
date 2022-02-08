<?php

class Convert
{
    private $type;
    private $product;

    public function __construct($type, $product)
    {
        $this->type = $type;
        $this->product = $product;
    }

    public function convert()
    {
        switch ($this->type) {
            case 'application/json':
                $platform = new Json($this->product);
                break;
            case 'application/xml':
                $platform = new Xml($this->product);
                break;
        }
        $type = new ConvertType($platform);
        return $type->getType();
    }
}