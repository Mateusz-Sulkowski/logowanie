<?php
    $_POST;
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $server = "localhost";
    $user = "root";
    $db_pass = "";
    $db = "logowanie";
    $conn = mysqli_connect($server, $user, $db_pass, $db);
    if ($conn->connect_error) 
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