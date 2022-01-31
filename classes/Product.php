<?php
class Product
{
    protected $name;
    protected $description;
    protected $price;
    protected $discount = 0;

    function __construct($_name, $_description, $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
    }

    function setDiscount($_discount)
    {
        $this->discount = $_discount;
    }
}
