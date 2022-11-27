<?php

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

function register($email, $name, $phone, $pass) {    
    $db = mysqli_connect('localhost', 'root', '', 'wad_modul4');
    $query = "INSERT INTO users (email, nama, password, no_hp) VALUES ('$email', '$name', '$pass', '$phone')";
    $insert = mysqli_query($db, $query);

    if($insert) {
        session_start();
        $_SESSION['msg'] = 'rs';
        header('Location: ../pages/Login-Ikram.php');
    }else{
        echo "Gagal";
    }
}

register($email, $name, $phone, $pass);

?>