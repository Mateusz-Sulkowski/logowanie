<?php
    session_start();
    require_once "connect.php";
    $_POST;
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $db = "logowanie";
    $conn = mysqli_connect($host, $db_user, $db_pass, $db);
    if (!$conn) 
    {
        die("<h1>Nie udało poączyć się z bazą</h>");
    }
    else
    {
        $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND pass='$pass'"; 
        $res = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_row($res))
        {
            print_r($row);
            $_SESSION["imie"]=$row['1']; 
            header('Location: notatnik.php');
        }

    }
?>