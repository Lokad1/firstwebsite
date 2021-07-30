<?php

    session_start();
    
    $con = mysqli_connect('localhost','root','loklok','gestion_de_lanomalie');
    
    $_SESSION['Desc_Ano'] = mysqli_real_escape_string($con ,$_POST['Desc_Ano']);
    
    $_SESSION['seuil_resolution'] = $_POST['seuil_resolution'];

    $_SESSION['Desc_Prestation'] = $_POST['Desc_Prestation'];

    $_SESSION['Desc_categorie'] = $_POST['Desc_categorie'];

   


    
    header('location:../adddetails.php');
    

?>