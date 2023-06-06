<?php

session_start();
include("../functions.php");
include("../conn.php");


$product_id = intval($_POST['productID']);


if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]++;
} else {
    $_SESSION['cart'][$product_id] = 1;
}


$serialized_array = $_SESSION['cart'];
$serialized_array = serialize($serialized_array);
$id_user = $_SESSION['id'];

$query = "UPDATE utilizator SET cos='$serialized_array' WHERE id='$id_user'";
$rez = mysqli_query($conn, $query);

die;