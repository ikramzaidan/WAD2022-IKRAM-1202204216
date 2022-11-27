<?php

function login($email, $password) {
    $db = mysqli_connect('localhost', 'root', '', 'wad_modul4');
    $query = "SELECT id, nama, password FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 1) {
        $User = $result -> fetch_array(MYSQLI_ASSOC);

        if($password == $User['password']) {
            session_start();
            $GLOBALS['user_id'] = $User['id'];
            $_SESSION["auth"] = 1;
            $_SESSION["user_id"] = $User['id'];
            $_SESSION["user_name"] = $User['nama'];
            return true;
        }else{
            return false;
        }
    }else {
        return false;
    }
}

function loginWithCookie($id) {
    $db = mysqli_connect('localhost', 'root', '', 'wad_modul4');
    $query = "SELECT nama FROM users WHERE id = $id";
    $result = mysqli_query($db, $query);
    if($result) {
        $User = $result -> fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION["auth"] = 1;
        $_SESSION["user_id"] = $id;
        $_SESSION["user_name"] = $User['nama'];
        header('Location: ../pages/Home-Ikram.php');
        die();
    }
}

?>