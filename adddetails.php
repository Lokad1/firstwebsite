<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adddetails.css">
    <title>Add anomalie details</title>
</head>
<body>
    <div id="login-card">
        <h1>ajouter les details</h1>
        <form action="./include/addd.php" method="post" class="login-form" id="login-form">

        <div class="input-group">
                <label for="Nom_unite">unite</label>
                <select name="Nom_unite" id="Nom_unite">
            <?php
                $options = array('unite 1','unite 2','unite 3','unite 4','unite 5','unite 6','Communs 12','Communs 34','Communs 56','Commun DIC','PORT','PARC','INFRA','PED');

                
                foreach($options as $option){
                    echo "<option value='$option'>$option</option>";
                }
               
            
            ?>
            </select><br>
            </div>

            <div class="input-group">
                <label for="Desc_statut">categorie</label>
                <select name="Desc_statut" id="Desc_statut">
                <option value="Suivi etroit">Suivi etroit</option>
                <option value="Encours">Encours</option>
                <option value="Reporter">Reporter</option>
                <option value="Cloturee">Cloturee</option>
            </select>
            </div>


            <div class="input-group">
                <label for="Datedet_Ano">Date de detection d'anomalie</label>
                <div class="merge-input-icon">
                    <input type="date" name="Datedet_Ano" id="Datedet_Ano"  required>
                </div> 
            </div>
            
            <div class="input-group">
                <label for="Datepre_Ano">Date prévisionnelle de levée d'anomalie</label>
                <div class="merge-input-icon">
                    <input type="date" name="Datepre_Ano" id="Datepre_Ano" required>
                </div>
            </div>

            <div class="input-group">
                <label for="Datelev_Ano">Date de levée d'anomalie</label>
                <div class="merge-input-icon">
                    <input type="date" name="Datelev_Ano" id="Datelev_Ano"  required>
                </div> 
            </div>

            <div class="input-group">
                <label for="Situation">Situation</label>
                <div class="merge-input-icon">
                    <textarea name="Situation" id="Situation" placeholder="Situation" rows="10" required></textarea>
                </div> 
            </div>





            <div class="ajouter">
                <input type="submit" name="ajouterd" value="ajouter details">
            </div>

        </form>
    </div>
</body>
</html>