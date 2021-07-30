<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/delete.css">
    <title>Delete</title>
</head>
<body>
    <div id="login-card">
        <h1>Supprimer l'anomalie</h1>
        <form action="./include/addd.php" method="post" class="login-form" id="login-form">

            <div class="input-group">
                <label for="Id_Ano">Entrer ID de l'anomalie</label>
                <div class="merge-input-icon">
                    <input type="text" name="Id_Ano" id="Id_Ano" placeholder="ID anomalie" required>
                </div>
            </div>


            <div class="delete">
                <input type="submit" name="delete" value="Delete">
            </div>


    <script src="js/main.js"></script>
</body>
</html>