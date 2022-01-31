<?php
class User
{
    protected $name;
    protected $surname;
    protected $email;
    protected $userType = "standard";
    protected $creditCards;
    protected $discount = 20;
    protected $cart;

    function __construct($_name, $_surname, $_email, $_creditCards = [], $_cart = [])
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->creditCards = $_creditCards;
        $this->cart = $_cart;
    }

    function getName()
    {
        return $this->name;
    }

    function getSurname()
    {
        return $this->surname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function addCreditCard($newCard)
    {
        $this->creditCards[] = $newCard;
    }

    function getUserType()
    {
        return $this->userType;
    }

    function getDiscount()
    {
        return 0;
    }

    function getCart()
    {
        return $this->cart;
    }

    function addToCart($_product)
    {
        $this->cart[] = $_product;
    }

    function getCreditCards()
    {
        return $this->creditCards;
    }
}
