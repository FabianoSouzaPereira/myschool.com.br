<?php
namespace application\dao;

use dao\Connection;
use PDO;


final class Login
{

    function  getLogin($email,$password){
        $sql= ("SELECT * FROM USER WHERE USEEMAIL = :email AND USEPASSWORD = :password;");
        $result= Connection::getInstance(); 
        $stmt = $result->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $stmt->execute(array(':email'=>$email,':password'=>$password));
        $select = $stmt->fetchAll( PDO::FETCH_ASSOC );
        return $select;
    }
}

