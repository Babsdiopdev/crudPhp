<?php
$host="localhost";
$username="root";
$password="";
$dbname="crudphp";

//creation de la connexion
$conn = mysqli_connect($host,$username,$password,$dbname);

// echo 'super';
if(!$conn){
    die("connexion echoue:" .mysqli_connect_error());
}