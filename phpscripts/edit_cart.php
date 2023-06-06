<?php

session_start();
include("../functions.php");
include("../conn.php");

$product_id = intval($_POST['prodID']);
$value = intval($_POST['value']);

if($value==0)
    unset($_SESSION['cart'][$product_id]);
else
    $_SESSION['cart'][$product_id] = $value;

if(count($_SESSION['cart'])==0)
    unset($_SESSION['cart']);

$serialized_array = $_SESSION['cart'];
$serialized_array = serialize($serialized_array);
$id_user = $_SESSION['id'];

$query = "UPDATE utilizator SET cos='$serialized_array' WHERE id='$id_user'";
$rez = mysqli_query($conn, $query);


die;