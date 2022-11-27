<?php

session_start();
session_destroy();
header('Location: ../pages/Home-Ikram.php');
die();

?>