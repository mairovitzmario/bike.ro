<?php 
session_start();
include("conn.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>bike.ro - Conectare</title>
    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav_style.css">
    <link rel="stylesheet" href="styles/conectare_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="scripts/nav_script.js"></script>
    <script src="scripts/conectare_script.js"></script>

</head>
<body>
    <a href="index.php">
    <div class="x">
        <i class="material-icons" style="font-size: 30px; color:white;">close</i>
    </div>
    </a>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <img src="img/conectare.jpg" alt="">    
        </div>
        <div class="forms">
            <div class="form-content">
              <div class="login-form">
                  <div class="title">Conectare.</div>
        <form method="post" id="login-form-form" name="login-form-form" action="forms/login_form.php">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" id="login-email" name="login-email">
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Parolă" id="login-parola" name="login-parola">
                  </div>
                  <div class="checkbox">
                    <input class="checkbox" type="checkbox" id="login-showpass" onclick="showPass('login-parola')">
                    <label for="login-showpass" class="checkbox-text">Afișează parola</label>
                  </div>
                  <div class="button input-box">
                    <div class="text login-error" id="login-error">&nbsp;</div>
                    <input type="button" value="Confirmă" name="login-post" onclick="validateLogin()">
                  </div>
                  <div class="text sign-up-text">Nu ai un cont? <label for="flip">Înscrie-te!</label></div>
                </div>
            </form>
          </div>

            <div class="signup-form">
              <div class="title">Înscriere.</div>
        <form action="forms/signup_form.php" method="post" id="signup-form-form" name="signup-form-form">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nume" id="signup-nume" name="signup-nume">
                  </div>
                  <div class="input-box">
                    <i class="fas fa-house-user"></i>
                    <input type="text" placeholder="Adresă" id="signup-adresa" name="signup-adresa">
                  </div>
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" id="signup-email" name="signup-email">
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Parolă" id="signup-parola" name="signup-parola">
                  </div>        
                  <div class="checkbox">
                    <input class="checkbox" type="checkbox" id="signup-showpass" onclick="showPass('signup-parola')">
                    <label for="signup-showpass" class="checkbox-text">Afișează parola</label>
                  </div>
                  <div class="button input-box">
                    <div class="text signup-error" id="signup-error">&nbsp;</div>          
                    <input type="button" value="Confirmă" name="signup-post" onclick="validateSignup()">
                  </div>
                  <div class="text sign-up-text">Ai deja un cont? <label for="flip">Conectează-te!</label></div>
                </div>
          </form>
        </div>
        </div>
        </div>
      </div>
   
</body>
</html>