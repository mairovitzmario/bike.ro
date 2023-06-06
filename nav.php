<?php
session_start();
include("functions.php");
include("conn.php");

$user_data = get_user_data($conn);
?>

<nav>
    <div class="logo">
        <a href="index.php">bike.ro</a>
    </div>
    <ul class="menu">
        <li class="submenu">
            <a href="produse.php">Produse.</a>
            <ul class="submenu-content">
                <a href="../magazin-online/produse.php?view=bicicleta"><li>Biciclete.</li></a>
                <hr>
                <a href="../magazin-online/produse.php?view=echipament"><li>Echipament.</li></a>
                <hr>
                <a href="../magazin-online/produse.php?view=accesorii"><li>Accesorii.</li></a>
            </ul>
        </li>
          <li> <span class="vr"></span> </li>
          <a href=<?php  if($user_data==false)echo "conectare.php"; else echo "cos.php"; ?>><li><i class="material-icons"style="font-size:26px;margin:0px;padding: 0px;">shopping_basket</i></a></li>
          <li> <span class="vr"></span> </li>
          <a href=<?php  if($user_data==false)echo "conectare.php"; else echo "user.php"; ?>><li><i class="material-icons"  id="login-button" style="font-size:26px;margin:0px;padding: 0px;">person</i><span style="font-size:24px;vertical-align:4px"><?php if(isset($_SESSION['nume'])) echo $_SESSION['nume']; ?></span></a></li>
    </ul>
</nav>