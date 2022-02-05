<?php
    $_POST;
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    echo $login;
    echo $pass;
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "logowanie";
    $conn = mysqli_connect($server, $user, $pass, $db);
    if (mysqli_connect_errno()) 
    {
        die("<h1>Nie udało poączyć się z bazą</h>");
    }
    else
    {
        
    }
?>