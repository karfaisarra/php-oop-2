<?php

class Product
{
    public function __construct(public String $name, public String $category)
    {
        $this->name = $name;
        $this->category = $category;
    }
}
