<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addano.css">
    <title>Add anomalie</title>
</head>
<body>
    <div id="login-card">
        <h1>ajouter une anomalie</h1>
        <form action="./include/add.php" method="post" class="login-form" id="login-form">

            <div class="input-group">
                <label for="Desc_Ano">description de l'anomalie</label>
                <div class="merge-input-icon">
                    <textarea name="Desc_Ano" id="Desc_Ano" placeholder="description de l'anomalie" rows="10" required></textarea>
                </div>
            </div>
            
            <div class="input-group">
                <label for="seuil_resolution">seuil resolution</label>
                <div class="merge-input-icon">
                    <input type="text" name="seuil_resolution" id="seuil_resolution" placeholder="seuil resolution" required>
                </div>
            </div>

            <div class="input-group">
                <label for="Desc_Prestation">Prestation</label>
                <select name="Desc_Prestation" id="Desc_Prestation">
            <?php
                $options = array('Prestation interne','Prestation externe','RAS','PDR Disponible/prestation interne','	
                PDR Disponible/prestation externe','Prestation interne /prestation externe','PDR non disponible','Disponible','Prestation');

                
                foreach($options as $option){
                    echo "<option value='$option'>$option</option>";
                }
               
            
            ?>
            </select><br>
            </div>

            <div class="input-group">
                <label for="Desc_categorie">categorie</label>
                <select name="Desc_categorie" id="Desc_categorie">
                <option value="Securite">Securite</option>
                <option value="Environnement">Environnement</option>
                <option value="Disponibilite">Disponibilite</option>
                <option value="Performance">Performance</option>
            </select>
            </div>



            <div class="ajouter">
                <input type="submit" name="ajouter" value="ajouter anomalie">
            </div>

        </form>
    </div>
</body>
</html>