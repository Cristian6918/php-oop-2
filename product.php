<?php
class Product
{
    public $name;
    public $description;
    public $category;
    public $price;
    public $id;
    public $prod_for = [];

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

    function setProduct_for($_prod_for)
    {
        $this->prod_for = $_prod_for;
    }
    function setId($_id)
    {
        $this->id = $_id;
    }
}
//Food for Animals
class Food extends Product
{
    public $taste_of;
    public $weight;

    function __construct($_name, $_price, $_taste_of)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->taste_of = $_taste_of;
    }
    function setWeight($_weight)
    {
        $this->weight = $_weight;
    }
};
//Toys for animals
class Toy extends Product
{
    public $type;
    function __construct($_name, $_price, $_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
    }
}
//Accessories for animals
class Accessories extends Product
{
    public $object;
    public $color;


    function __construct($_name, $_price, $_object)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_object;
    }
}
