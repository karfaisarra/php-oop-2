<?php
class Game extends Product
{
    public function __construct($name, $category, $img, $weight, $type, $price)
    {
        parent::__construct($name, $category, $img, $weight, $type, $price);
    }
}
