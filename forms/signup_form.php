<?php
session_start();
include("../conn.php");
include("../functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nume = $_POST['signup-nume'];
    $email = $_POST['signup-email'];
    $parola = md5($_POST['signup-parola']);
    $adresa = $_POST['signup-adresa'];

    $query = "select * from utilizator where email = '$email'";
    $rez = mysqli_query($conn, $query);
    
    if($rez && mysqli_num_rows($rez) > 0) {
        echo <<<HTML
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>bike.ro - Înregistrare</title>
            <style>
                body {
                    background-color: #d65b5b;
                    text-align: center;
                    padding-top: 100px;
                }
                
                h1 {
                    color: white;
                    font-size: 24px;
                }
                
                button {
                    padding: 10px 20px;
                    background-color: white;
                    border: none;
                    color: #d65b5b;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                }
            </style>
            <link rel="stylesheet" href="../styles/style.css">
        </head>
        <body>
            <h1>Înregistrare eșuată! Email deja folosit.</h1>
            <button onclick="location.href = '../conectare.php';">Ok</button>
        </body>
        </html>
        HTML;
        die;
    }
    else {
        $query = "insert into utilizator (nume,email,parola,adresa) values ('$nume','$email','$parola','$adresa')";
        mysqli_query($conn, $query);
        echo <<<HTML
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>bike.ro - Înregistrare</title>
            <style>
                body {
                    background-color: green;
                    text-align: center;
                    padding-top: 100px;
                }
                
                h1 {
                    color: white;
                    font-size: 24px;
                }
                
                button {
                    padding: 10px 20px;
                    background-color: white;
                    border: none;
                    border-radius: 5px;
                    color: #52aa77;
                    font-size: 16px;
                    cursor: pointer;
                }
            </style>
            <link rel="stylesheet" href="../styles/style.css">
        </head>
        <body>
            <h1>Înregistrare cu succes!</h1>
            <button onclick="location.href = '../index.php';">Ok</button>
        </body>
        </html>
        HTML;
        die;
    }

    }


