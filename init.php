<?php
if(!isset($_SESSION)) {
    session_start();
}

ini_set('display_errors', true);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

require 'functions.php';

/* if ( $_SESSION['login'] = false){
    require 'login.php';
} */

?>