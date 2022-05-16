<?php

class Product
{
    public $name;
    public $description;
    public $category;
    public $price;
    public $id;

    function __construct($_name, $_price, $_category)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
    }

    function setDescription($_description)
    {
        $this->description = $_description;
    }
}

class Food extends Product
{
    public $prod_for = [];
};

$mensola = new Product('Ciao', 12, 'animali');

echo ('<pre>');
var_dump($mensola);
echo ('</pre>');
