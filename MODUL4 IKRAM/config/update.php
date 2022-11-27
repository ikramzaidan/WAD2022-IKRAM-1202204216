<?php

session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

function update($id, $name, $phone, $pass) {
    $db = mysqli_connect('localhost', 'root', '', 'wad_modul4');
    $sql = "UPDATE users SET nama='$name', no_hp='$phone', password='$pass' WHERE id='$id'";
    $update = mysqli_query($db, $sql);

    if($update) {
        $_SESSION['msg'] = 'ps';
        header('Location: ../pages/Profile-Ikram.php');
        die();
    }else{
        $_SESSION['msg'] = 'pf';
        header('Location: ../pages/Profile-Ikram.php');
        die();
    }
}

update($id, $name, $phone, $pass);
?>