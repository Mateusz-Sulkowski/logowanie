<?php
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
            echo "Twoje id to: ".$row["0"]."<br>";
            echo "Twoja płeć to: ".$row["4"]."<br>";
        }

    }
?>