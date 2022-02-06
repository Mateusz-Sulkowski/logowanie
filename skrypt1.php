<?php
    $_POST;
    $login = $_POST['login'];
    $pass = $_POST['pass'];
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
        $spr = "SELECT * FROM uzytkownicy WHERE login='$login' AND pass='$pass'";
        $wynik = mysqli_query($conn, $spr);
        while($row = mysqli_fetch_array($wynik))
        {
            echo $row["0"];
        }
    }
?>