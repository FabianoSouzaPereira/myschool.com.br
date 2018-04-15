<?php
if(!isset($_SESSION)) {
    session_start();
}

require_once 'init.php';
require_once 'application/dao/Connection.php';
include 'login.php';