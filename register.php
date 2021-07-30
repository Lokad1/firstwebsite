<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/register.css">
    <title>register</title>
</head>
<body>
    <div id="register-card">
        <h1>Créer un compte</h1>
        <form action="./include/registration.php" method="post" class="register-form" id="register-form">
            
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <div class="merge-input-icon">
                    <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required>
                </div>
            </div>

            <div class="input-group">
                <label for="Email">Email</label>
                <div class="merge-input-icon">
                    <input type="text" name="Email" id="Email" placeholder="Email" required>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>

            <div class="input-group">
                <label for="password">Mot de passe</label>
                <div class="merge-input-icon">
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <i class="pass-icon fas fa-eye"></i>
                </div> 
            </div>

            <div class="alert">
                <?php
                    if(isset($_GET['errornum'])){
                        if($_GET['errornum']==1){
                            echo "username already taken";
                        
                        }else if($_GET['errornum']==2){
                        echo "Email already taken";
                       
                        }else if ($_GET['errornum']==0){
                        echo "registration successful";
                        header('location:../login.php');
                        } 
                    }
                ?>
            </div>
            
            <div class="register-button">
                <input type="submit" value="Créer un compte">
            </div>
        </form>
    </div>

    <script src="js/main.js"></script>
</body>
</html>