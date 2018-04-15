<?php
function Urlnow(){
    $url = substr($_SERVER[REQUEST_URI], strpos($_SERVER[REQUEST_URI], '='));
    return $url;
}
?>