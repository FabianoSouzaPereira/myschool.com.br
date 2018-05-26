<?php
namespace modules;

abstract class Person
{
    private $idNumber; //RG
    private  $ssn; //CPF
    private  $firstName;
    private  $lastName;
    private  $MiddleName;
    private $age;
    private  $address;
    private  $nacionality;
    private  $neighborhood;
    private $city;
    private $state;
    private  $country;
    private  $zipcode;
    
    
    abstract function post();
    abstract function update();
    abstract function delete();
    abstract function read();
}

