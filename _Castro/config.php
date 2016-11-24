<?php

if(!isset($_SESSION))
{
    session_start();
}


// create connection
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "Castro";
    $db = mysqli_connect($host, $user, $password);
    $dbcon = mysqli_select_db($db, $database);
    $error = null;

    if (!$dbcon) {exit();}
?>
