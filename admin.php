<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/admin.css">
    <title>Delete</title>
</head>
<body>
    
    <div id="login-card">
        <h1>Admin accès</h1>
        <form action="./include/aa.php" method="post" class="login-form" id="login-form">

            <div class="input-group">
                <label for="Email">Entrer l'email de l'utilisateur</label>
                <div class="merge-input-icon">
                    <input type="text" name="Email" id="Email" placeholder="Email" required>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>


            <div class="admin">
                <input type="submit" name="admin" value="Donner l'accès">
            </div>

    </form>
    <script src="js/main.js"></script>
</body>
</html>