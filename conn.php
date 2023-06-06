<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bike.ro";

if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("esuare conectare la baza de date"); 
}