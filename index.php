<?php 
session_start(); 
if( !(isset($_SESSION['login']) && $_SESSION['login'] == true) ){
    header('location: loginView.php');
    exit();
}
require_once 'init.php';
require_once 'application/dao/Connection.php';

$fullpath="";
$ret = array();

$url= Urlnow();
$ret = viewpage($url);


if((isset($ret) !== false) && $ret !== ""){
    $fullpath = 'application/modules/'.$ret[0].'/'.$ret[1].'/'.$ret[2].'.php';
}else{
    $fullpath = "begin.php";
}

include_once 'indexView.php';

?>

    
    