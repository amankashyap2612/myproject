<?php

$servername ="Localhost";
$username ="root";
$password="";
$database ="bottle";


$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "error";
}


?>