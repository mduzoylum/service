<?php

class Xml implements Type
{
    private $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getType()
    {
        $xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
        $result= print_r($this->array_to_xml($this->product, $xml_data),false);
        return $result;
    }

    function array_to_xml($data, &$xml_data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (is_numeric($key)) {
                    $key = 'item' . $key;
                }
                $subnode = $xml_data->addChild($key);
                $this->array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key", htmlspecialchars("$value"));
            }
        }
        return $xml_data;
    }
}