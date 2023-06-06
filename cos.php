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
    <title>bike.ro - Coș</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cos_style.css">
    <link rel="stylesheet" href="styles/nav_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="scripts/nav_script.js"></script>
    <script src="scripts/cos_script.js"></script>
</head>
<body>
    <div id="navbar"></div>
    <div style="margin:160px"></div>

<div class="items-container">

      <?php 
      $contor = 1;
      $product_prices_and_quantities = [];
      $pret_total = 0;
      if(isset($_SESSION['cart'])) {
        echo '<h1 style="color:white;margin-bottom:20px">Coș.<h1>';
      foreach($_SESSION['cart'] as $productID => $productQT) {
          $sql = "SELECT * FROM produs WHERE id='$productID'";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo'
            <div class="product" id="product'.$contor.'">
              <div class="count"> '.($contor).' </div>
              <div class="name">'.$row['nume'].'<span style="color:gray"> #'.$row['id'].'</span></div>
              <div class="price-qnt">
                <div class="price">'.$row['pret'].' RON</div>
                <div class="qnt"> <label for="qnt'.$contor.'">x</label> <input type="text" class="textfield" value="'.$productQT.'" id="qnt'.$contor.'" onkeypress="return isNumber(event)" onchange="createRequestCos('.$productID.','.$contor.')"/> </div>
              </div>
              <button class="remove-btn" onclick="createRequestCos('.$productID.',0)">Elimină</button>
            </div>';
          }
          $contor++;
          array_push($product_prices_and_quantities, Array($row['pret'], $productQT));
          $pret_total = $pret_total + ($row['pret'] * $productQT);
        }
        echo '
        <hr>
        <div class="checkout-section">
          <h1>Checkout.</h1>
          <p>  <span id="preturi">';
          $lastElement = end($product_prices_and_quantities);
          foreach($product_prices_and_quantities as $prd) {
            echo "$prd[0]x$prd[1]";
            if($prd != $lastElement) {
              echo ' + ';
            }
            else {
              echo ' = ';
            }
          }

          echo '<span style="font-size:30px;">'.$pret_total.'</span>';
          
        echo ' RON</span> </p>
          <button id="checkout-btn" onclick="confirmOrder()">Confirmă</button>
        </div>
        ';
      }
      else {
        echo '<h1 style="color:white;">Coș gol.<h1>';
      }
      ?>

  <!-- Add more item rows as needed -->
</div>

    
</body>
</html>