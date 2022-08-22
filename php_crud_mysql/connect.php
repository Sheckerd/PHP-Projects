<?php

$connect = new mysqli('localhost','root','','crud_database') ;

if(!$connect){
    die(mysqli_error("Abandona tus sueños, y muere."));
}

?>