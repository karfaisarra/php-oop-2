<?php
class Product
{
    public $name;
    public $category;
    protected $img;
    protected $weight;
    protected $type;
    protected $price;
    public function __construct($name, $category, $img, $weight, $type, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->img = $img;
        $this->weight = $weight;
        $this->type = $type;
        $this->price = $price;
    }
    ########################################
    public function getImg()
    {
        return $this->img;
    }
    ########################################

    public function getWeight()
    {
        return $this->weight;
    }
    ########################################
    public function getType()
    {
        return $this->type;
    }
    ########################################
    public function getPrice()
    {
        return "$this->price €";
    }
}
