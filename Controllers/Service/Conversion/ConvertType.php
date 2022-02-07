<?php

class ConvertType
{
    private Type $type;

    public function __construct(Type $type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        $this->type->getType();
    }
}