<?php
session_start();

if(isset($_SESSION['id'])) {
    unset($_SESSION['id']);
    unset($_SESSION['nume']);
    unset($_SESSION['email']);
    unset($_SESSION['adresa']);
    unset($_SESSION['cart']);
}
    

header("Location: ../index.php");
die;