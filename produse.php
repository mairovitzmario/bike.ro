<?php 
session_start();
require_once('conn.php');
require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bike.ro - Produse</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav_style.css">
    <link rel="stylesheet" href="styles/produse_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="scripts/nav_script.js"></script>
    <script src="scripts/produse_script.js"></script>
</head>
<body>
    <div id="navbar"></div>

    <div class="top-divider" ></div>
    <h1 class="header-title">
        <?php

            if(!isset($_GET['view']))
                echo 'Produse.';
            else {
                $tip = $_GET['view'];
                if($tip == 'bicicleta')
                    echo 'Biciclete.';
                else if($tip == 'accesorii')
                    echo 'Accesorii.';
                else if($tip == 'echipament')
                    echo 'Echipament.';
            }
        ?>
    </h1>
    <?php
    if(isset($_GET['view'])) {
        $tip = $_GET['view'];
        $sql = "SELECT * FROM produs WHERE tip='$tip'";
    }
    else {
        $sql = "SELECT * FROM produs";
    }
    
    $result = $conn->query($sql);
    $contor = 0;
    if ($result->num_rows > 0) {
        echo '<section class="features">';
        while($row = $result->fetch_assoc()) {
            if($contor % 3 == 0) {
                echo '<div class="row">';
            }
    
            echo '
            <div class="card" id="'.$row['id'].'">
                <img src="'.$row['poza'].'" style="width:100%">
                <h1>'.$row['nume'].'<span style="color:gray"> #'.$row['id'].'</span></h1>
                <p class="price">'.$row['pret'].' RON</p>
                <p>'.$row['descriere'].'</p>
                <p><button id="adaugare'.$row['id'].'"'; if(!isset($_SESSION['id']))echo 'onclick="notLoggedIn()"';  else echo 'onclick="createRequestCos('.$row['id'].')"'; echo'>Adaugă în coș. </button></p>
            </div>';
            
            $contor++;
    
            if($contor % 3 == 0 || $contor == $result->num_rows) {
                echo '</div>'; 
            }
        }
    
        echo '</section>';
    } else {
        echo '<h1 class="header-title">Produse nevalabile.</h1>';
    }
?>
</div>
<div class="overlay" onclick="closePopup()"></div>
    <div class="popup" id="popup1">
        <h2>Produs adăugat în coș cu succes!</h2>
    </div>
    <div class="popup" id="popup2">
        <h2>Conectați-vă pentru a adăuga produse în coș.</h2>
    </div>


</body>
</html>