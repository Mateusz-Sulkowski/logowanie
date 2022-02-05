<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Logowanie</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="nav">
            Logowanie
        </div> 
        <div id="formularz">
            <form action="skrypt1.php" method="POST">
                <label for="login">Login</label><br>
                <div style="height:10px"></div>
                <input type="text" name="login"><br>
                <div style="height:20px"></div>
                <label for="pass">Hasło</label><br>
                <div style="height:10px"></div>
                <input type="password" name="pass"><br>
                <div style="height:60px"></div>
                <button type="submit">Zaloguj się!</button>
            </form>   
        </div>
    </body>
</html> 