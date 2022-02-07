<?php
    session_start();
    require_once "connect.php";
    $_POST;
    $notatnik = $_POST['notatka'];
    $db = "logowanie";
    $conn = mysqli_connect($host, $db_user, $db_pass, $db);
    if (!$conn) 
    {
        die("<h1>Nie udało poączyć się z bazą</h>");
    }
    else
    {
        $imie = $_SESSION['imie'];
        $sql = "UPDATE uzytkownicy SET notatki='$notatnik' WHERE login='$imie'";
        $res = mysqli_query($conn, $sql);
        echo $res;
    } 
?>