<?php
    $_POST;
    $login = $_POST['login'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $data = $_POST['data'];
    $plec = $_POST['plec'];
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
        if(strcmp($pass1, $pass2) !== 0)
            {
                echo '<h1>Hasła różnią się!<h2><br><button><a href="reg.php" style="text-decoration:none;color:black;">Powrót do strony rejestracji</a></button>';
            }
        else
            {
                if(empty($data))
                {
                    echo '<h1>Nie podał*ś daty!</h><br><button><a href="reg.php" style="text-decoration:none;color:black;">Powrót do strony rejestracji</a></button>';
                }
                else
                {   
                    echo '<h1>Rejestracja przebiegła pomyślnie!</h>';

                    $sql = "INSERT INTO `uzytkownicy` (`id`, `login`, `pass`, `data urodzenia`, `plec`) VALUES (NULL, '$login', '$pass1', '$data', '$plec');";
                    mysqli_query($conn, $sql);
                    echo '<br><br><button><a href="log.php" style="text-decoration:none;color:black;>Zaloguj się</a></button>';
                }
            }
    }
?>