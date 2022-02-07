<?php
    $_POST;
    $login = $_POST['login'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $data = $_POST['data'];
    $plec = $_POST['plec'];
    $conn = mysqli_connect($host, $db_user, $pass, $db);
    if (mysqli_connect_errno()) 
    {
        die("<h1>Nie udało poączyć się z bazą</h>");
    }
    else
    {
        $spr = "SELECT * FROM uzytkownicy WHERE login='$login'";
        $wynik = mysqli_query($conn, $spr);
        if(mysqli_num_rows($wynik)>0)
        {
            echo '<h1>Nieprawidłowy login!</h><br><br><button><a href="reg.php" style="text-decoration:none;color:black;">Powrót do strony rejestracji</a></button>';
        }
        else
        {
            if(strcmp($pass1, $pass2) !== 0)
            {
                echo '<h1>Hasła różnią się!</h><br><button><a href="reg.php" style="text-decoration:none;color:black;">Powrót do strony rejestracji</a></button>';
            }
            else
            {
                if(empty($data))
                {
                    echo '<h1>Nie podał*ś daty!</h><br><button><a href="reg.php" style="text-decoration:none;color:black;">Powrót do strony rejestracji</a></button>';
                }
                else
                {   
                    echo '<h1>Rejestracja przebiegła pomyślnie!</h><br><br><br><a href="log.php" style="text-decoration:none;color:black;><button>Zaloguj się</button></a>';
                   
                    $sql = "INSERT INTO `uzytkownicy` (`id`, `login`, `pass`, `data urodzenia`, `plec`) VALUES (NULL, '$login', '$pass1', '$data', '$plec');";
                    mysqli_query($conn, $sql);
                    mysqli_close($conn);
                }
            }
        }
    }
?>