<?php

class Premium extends user
{
    protected $userType = "premium";

    public function addToCart($_product)
    {
        $_product->setDiscount($this->_discount);
        $this->cart[] = $_product;
    }

    function __construct()
    {
        $this->_discount = 20;
    }
}
