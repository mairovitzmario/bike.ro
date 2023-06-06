<?php

function get_user_data($conn) {
    if(isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $query = "select * from utilizator where id = '$id' limit 1";

        $rez = mysqli_query($conn, $query);
        if($rez && mysqli_num_rows($rez)>0) {
            $user_data = mysqli_fetch_assoc($rez);
            return $user_data; 
        }
    }

    return false;
}

