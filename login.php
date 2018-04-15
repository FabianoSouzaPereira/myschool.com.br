<?php
use application\dao\Login;

include_once 'application/dao/Connection.php';
include_once 'application/dao/Login.php';

if(!empty($_POST)){

$email = $_POST['email'];
$password = $_POST['password'];

$login = new Login();
$userLog = $login->getLogin($email, $password);
print_r($userLog);
} else{
    if($login==false){
    include 'indexlog.php';
    }
}
?>