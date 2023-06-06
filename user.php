<?php 
session_start();
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adresa_noua = $_POST["address-textbox"];
    $_SESSION['adresa'] = $adresa_noua;
    $id_user = $_SESSION['id'];
    $query = "UPDATE utilizator SET adresa='$adresa_noua' WHERE id='$id_user'";
    $rez = mysqli_query($conn, $query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bike.ro - Utilizator</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav_style.css">
    <link rel="stylesheet" href="styles/user_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-vRj2TiwCSUUpHpuArZoTUV7c9iDvkJYNV3nyJUvD7PdWuytmUfDSuGzUM8yKyA6HgadMkP6ijDw0IT4X3bOVDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="scripts/nav_script.js"></script>
    <script src="scripts/user_script.js"></script>

</head>
<body>
    <div id="navbar"></div>

    <div class="user-info center">
    <h1>Profil.</h1>
    <table>
        <tr>
            <th><i class="fas fa-user" style="font-size:25px;"></i></th>
            <td><?php echo $_SESSION["nume"];?></td>
        </tr>
        <tr>
            <th><i class="fas fa-envelope" style="font-size:25px;"></i></th>
            <td><?php echo $_SESSION["email"]?></td>
        </tr>
        <tr>
            <th><i class="fas fa-house-user" style="font-size:25px;"></i></th>
            <td id="address-bar"><?php echo $_SESSION['adresa']?> <i class="material-icons" style="font-size:20px; cursor:pointer;" onclick="changeToTextbox()">edit</i></td>
        </tr>
    </table>
    <a href="phpscripts/logout.php"><button class="logout-btn">Deconectează-te</button></a>
</div>
</body>
</html>