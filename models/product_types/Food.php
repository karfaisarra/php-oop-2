<?php

class Food extends Product
{
    protected $img;
    protected $weight;
    protected $type;
    protected $price;
    public function __construct($name, $category, $img, $weight, $type)
    {
        parent::__construct($name, $category);
        $this->name = $name;
        $this->category = $category;
        $this->img = $img;
        $this->weight = $weight;
        $this->type = $type;
    }
    ########################################
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function getImg()
    {
        return $this->img;
    }
    ########################################
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    ########################################
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    ########################################
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return "$this->price €";
    }
}
