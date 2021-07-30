<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="fr"/>
    <link rel="stylesheet" href="css/anomalie.css">
    <title>Anomalie</title>
</head>
<body>
    <form action="./include/validation.php" method="get" class="connexion-form" id="connexion-form">
    <div class="button">
    <a class="buttona" href="https://anomaliemanagement.herokuapp.com/addano.php">Ajouter une anomalie</a>
    <a class="buttons" href="https://anomaliemanagement.herokuapp.com/delete.php">Supprimer une anomalie</a>
    <input type="submit" name="buttonh" id="buttonh" value="Retourner a l'acceuil">
    
    </div>
    </form>

    <table>
        <tr>
            <th>Unite</th>
            <th>ID_anomalie</th>
            <th>Déscription anomalie</th>
            <th>Catégorie</th>
            <th>Date de detection d'anomalie</th>
            <th>Date prévisionnelle de levée d'anomalie</th>
            <th>Date de levée d'anomalie</th>
            <th>Etat PDR /prestation </th>
            <th>Situation / Commentaires</th>
            <th>Statut</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost","root","loklok","gestion_de_lanomalie");
            $sql = " select * from detailsanomalie natural join anomalie natural join statut natural join unite natural join categorie natural join prestation order by Id_ano ASC ;";
            $result = mysqli_query($conn , $sql);
            $num = mysqli_num_rows($result);

            if($num > 0){
                while($row = mysqli_fetch_assoc($result) ){
                    echo "<tr><td>". $row["Nom_unite"] ."</td><td>". $row["Id_Ano"] ."</td><td>". $row["Desc_Ano"] ."</td><td>". $row["Desc_categorie"] ."</td><td>". $row["Datedet_Ano"] ."</td><td>". $row["Datepre_Ano"] ."</td><td>". $row["Datelev_Ano"] ."</td><td>". $row["Desc_Prestation"] ."</td><td>". $row["Situation"] ."</td><td>". $row["Desc_statut"] ."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "0 result";
            }
            mysqli_close($conn);

        ?>
    </table>

    
</body>
</html>
