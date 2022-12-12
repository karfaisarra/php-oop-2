<?php

class Food extends Product
{
    public function __construct($name, $category, $img, $weight, $type, $price)
    {
        parent::__construct($name, $category, $img, $weight, $type, $price);
    }
}
