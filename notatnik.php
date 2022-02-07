<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Logowanie</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style-formularze.css">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div id="nav">Notatnik</div>
        <?php
                require_once "connect.php";
                $db = "logowanie";
                $conn = mysqli_connect($host, $db_user, $db_pass, $db);
                echo "<h1 style='text-align:center;'>Witaj ".$_SESSION["imie"]."!</h>";
                $imie = $_SESSION["imie"];
                $sql = "SELECT notatki FROM uzytkownicy WHERE login='$imie';";
                $res = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_row($res))
                {
                    $notatka = $row['0'];
                }
                $_SESSION['imie'];
        ?> 
        <div id="formularz" >
            <form action="notuj.php" method="POST">
                <label for="notatnik">Oto twój notatnik</label><br><br>
                <textarea name="notatka" type="text" id="notatnik"><?php echo $notatka; ?></textarea><br><br>
                <Button type="submit">
                    Zapisz!
                </button>
                <button type="reset">
                    Cofnij ostatni zapis!
                </button>
            </form>
        </div>
    </body>
</html> 