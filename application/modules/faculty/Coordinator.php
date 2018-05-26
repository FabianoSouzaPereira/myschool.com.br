<?php
namespace modules\lecturer;

use modules\Person;

class Coordinator extends Person
{
    private $idNumber; //RG
    private $ssn; //CPF
    private $firstName;
    private $lastName;
    private $MiddleName;
    private $age;
    private $address;
    private $nacionality;
    private $neighborhood;
    private $city;
    private $state;
    private $country;
    private $zipcode;
    
    
    public function post()
    {
       $sql= "";
    }

    public function update()
    {}

    public function reade()
    {}

    public function delete()
    {}

}

