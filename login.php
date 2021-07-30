<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>
<body>
    <div id="login-card">
        <h1>Se connecter</h1>
        <form action="./include/validation.php" method="post" class="login-form" id="login-form">

            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <div class="merge-input-icon">
                    <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required>
                </div>
            </div>

            <div class="input-group">
                <label for="paswword">Mot de passe</label>
                <div class="merge-input-icon">
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <i class="pass-icon fas fa-eye"></i>
                </div> 
            </div>
            


            <div class="error-alert">
                <?php
                    if(isset($_GET['errornum'])){
                        if($_GET['errornum']==1){
                            echo "username or password are incorrect!";
                        }
                    }
                ?>
            </div>

            <div class="login-button">
                <input type="submit" value="Se connecter">
            </div>

            <div class="create-account">
                <p>Vous n'avez pas un compte ? </p>
                <a href="https://anomaliemanagement.herokuapp.com/register.php">Créer un compte</a>
            </div>
        </form>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
