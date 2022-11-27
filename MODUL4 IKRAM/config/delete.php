<?php

include("connector.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM showroom_ikram_table WHERE id_mobil=$id";
    $delete = mysqli_query($db, $sql);

    if($delete) {
        session_start();
        $_SESSION['msg'] = 'ds';
        return redirect('../pages/ListCar-Ikram.php');
    } else {
        echo "Gagal delete";
    }
}
?>