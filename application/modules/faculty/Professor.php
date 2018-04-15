<?php
namespace modules\lecturer;

use modules\Person;

/**
 * @author developer
 *
 * In that case this classe refer a Associate Professor or Professor.
 * An associate professor is a college teacher who ranks above an 
 * assistant professor but below a professor. 
 */
class Professor extends Person
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
    {}

    public function update()
    {}

    public function reade()
    {}

    public function delete()
    {}

}

