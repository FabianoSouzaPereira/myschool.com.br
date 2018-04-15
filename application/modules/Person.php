<?php
namespace modules;

abstract class Person
{
    public $idNumber; //RG
    public  $ssn; //CPF
    public  $firstName;
    public  $lastName;
    public  $MiddleName;
    public  $age;
    public  $address;
    public  $nacionality;
    public  $neighborhood;
    public  $city;
    public  $state;
    public  $country;
    public  $zipcode;
    
    
    abstract function post();
    abstract function update();
    abstract function delete();
    abstract function reade();
}

