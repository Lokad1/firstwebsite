<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title> Home Page</title>
</head>
<body>
    <header>
    <div class="header-main">
            <div class="container header-main-content">
                <img class="logo" src="img/taqa.png">
                <nav>
                    <ul>
                        <li><a href="http://localhost/firstwebsite/homead.php">Acceuil</a></li>
                        <li><a href="http://localhost/firstwebsite/anomalie.php">Gerer les anomalies</a></li>
                        <li><a href="http://localhost/firstwebsite/access.php">Admin accès</a></li>
                        <li><a href="#">À Propos de nous</a></li>
                    </ul>
                </nav>
                <p class="header-cta">
                    <button><a href="http://localhost/firstwebsite/firstpage.php">Se déconnecter</a></button>
                </p>
            </div>
    </div>
    </header>
        <div class="mainbody">
            <h1>Bienvenue <?php echo $_SESSION['username'] ; ?></h1>
        </div> 
    
</body>
</html>