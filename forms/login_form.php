<?php
session_start();
include("../conn.php");
include("../functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['login-email'];
    $parola = md5($_POST['login-parola']);


    $query = "select * from utilizator where email = '$email' limit 1";
    $rez = mysqli_query($conn, $query);
    
    if($rez && mysqli_num_rows($rez) > 0) {
        $user_data = mysqli_fetch_assoc($rez);

        if($user_data['parola'] === $parola) {
            $_SESSION['id'] = $user_data['id'];
            $_SESSION['nume'] = $user_data['nume'];
            $_SESSION['email'] = $user_data['email'];
            $_SESSION['adresa'] = $user_data['adresa'];
            if($user_data['cos']!=null && $user_data['cos']!='')
                $_SESSION['cart'] = unserialize($user_data['cos']);
            echo <<<HTML
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <title>bike.ro - Conectare</title>
                <style>
                    body {
                        background-color: #52aa77;
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
                        color: #52aa77;
                        font-size: 16px;
                        border-radius: 5px;
                        cursor: pointer;
                    }
                </style>
                <link rel="stylesheet" href="../styles/style.css">
            </head>
            <body>
                <h1>Conectare cu succes!</h1>
                <button onclick="location.href = '../index.php';">Ok</button>
            </body>
            </html>
            HTML;
            die;
        } else {
            echo <<<HTML
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <title>bike.ro - Conectare</title>
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
                <h1>Conectare eșuată! Utilizatorul sau parola nu există.</h1>
                <button onclick="location.href = '../conectare.php';">Ok</button>
            </body>
            </html>
            HTML;
            die;
        }

    }
    else {
        echo <<<HTML
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>bike.ro - Conectare</title>
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
            <h1>Conectare eșuată! Utilizatorul sau parola nu există.</h1>
            <button onclick="location.href = '../conectare.php';">Ok</button>
        </body>
        </html>
        HTML;
        die;
    }

    }


