<?php
 
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'modul3';
 
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
 
?>