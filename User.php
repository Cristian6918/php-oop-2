<?php
class User
{
    public $name;
    public $surname;
    public $shipping_adress;
    public $email;
    public $id;
    protected $reduction = 0;

    function __construct($_name, $_surname, $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }


    function setId($_id)
    {
        $this->id = $_id;
    }

    function setShippingAdress($_adress)
    {
        $this->shipping_adress = $_adress;
    }
}


//Class of registerd User
class RegisteredUser extends User
{
    public $reduction = 20;
    private $cardNumber;
    private $cardDate;


    function __construct($_name, $_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    function  setCard($card)
    {
        $this->cardNumber = $card;
    }
    function setValidDate($data)
    {
        $actualDate = date('n-y');
        if ($data > $actualDate) {
            echo ('   Card Expired');
        }
    }
}
