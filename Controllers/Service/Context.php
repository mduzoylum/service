<?php

class Context
{
    private platform $platform;

    public function __construct(platform $platform)
    {
        $this->platform = $platform;
    }

    public function getProduct()
    {
        return $this->platform->getProduct();
    }
}