<?php
session_start();
require_once('../conn.php');


unset($_SESSION['cart']);
$id_user = $_SESSION['id'];
$query = "UPDATE utilizator SET cos='' WHERE id='$id_user'";
$rez = mysqli_query($conn, $query);

$nume = $_SESSION['nume'];
$adresa = $_SESSION['adresa'];

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>bike.ro - Comandă</title>
    <style>
        body {
            background-color: #52aa77;
            text-align: center;
            padding-top: 100px;
        }
        
        h1 {
            color: white;
            font-size: 30px;
        }
        
        p {
            color: white;
            font-size: 20px;
        }

        span {
            font-size:24px;
        }

        button {
            padding: 10px 20px;
            background-color: white;
            border: none;
            color: #52aa77;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1>Comandă efectuată!</h1>
    <p> Aceasta va fi trimisă destinatarului: <span>$nume</span> la adresa: <span>$adresa</span>.</p>
    <button onclick="location.href = '../cos.php';">Ok</button>
</body>
</html>
HTML;

die;