<?php

class CreditCard
{
    protected $cardNumber;
    protected $cvv;

    function __construct($_cardNumber, $_cvv)
    {
        $this->number = $_cardNumber;
        $this->cvv = $_cvv;
    }
    function getCardNumber()

    {
        return $this->cardNumber;
    }

    function getCvv()
    {
        return $this->cvv;
    }
}
