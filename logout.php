<?php
session_start();
session_destroy();
header("location: loginView.php");
exit();

?>