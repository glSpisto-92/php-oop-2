<?php

class Prodotto
{
    // attributes
    public $type;
    public $name;
    public $price;
    public $brand;
    public $available;

    // constructor
    public function __construct($_type, $_name, $_price, $_brand, $_available)
    {
        $this->type = $_type;
        $this->name = $_name;
        $this->price = $_price;
        $this->brand = $_brand;
        $this->available = $_available;
    }

    public function setSconto($_type, $_price)
    {
        if ($_type == 'informatica') {
            $this->price = $_price - 50;
        }
    }

    public function getSconto()
    {
        return $this->price;
    }
}

class Article_home extends Prodotto
{
    //attributes
    public $peso;

    //constructor
    public function __construct($_type, $_name, $_price, $_brand, $_available, $_peso)
    {
        parent::__construct($_type, $_name, $_price, $_brand, $_available);
        $this->peso = $_peso;
    }
}

$prod_tech = new Prodotto('informatica', 'computer', 699, 'hp', 1);
$prod_tech->setSconto('informatica', 699);
var_dump($prod_tech);


$prod_home = new Article_home('cucina', 'lavastoviglie', 499, 'rex', 1, '200kg');
var_dump($prod_home);
