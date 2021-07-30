<?php

    session_start();

    $con = mysqli_connect('localhost','root','loklok','gestion_de_lanomalie');

    if(isset($_POST['ajouterd'])){
       
        $nu = $_POST['Nom_unite'];

        $ds = $_POST['Desc_statut'];

        $dd = date('Y-m-d', strtotime($_POST['Datedet_Ano']));

        $dpl = date('Y-m-d', strtotime($_POST['Datepre_Ano']));

        $dl = date('Y-m-d', strtotime($_POST['Datelev_Ano']));

        $st = mysqli_real_escape_string($con ,$_POST['Situation']);

        $sql = "insert into anomalie(Desc_Ano,seuil_resolution,Id_Prestation,Id_categorie) values('{$_SESSION['Desc_Ano']}','{$_SESSION['seuil_resolution']}',(select id_prestation from prestation where desc_prestation = '{$_SESSION['Desc_Prestation']}'),(select id_categorie from categorie where Desc_categorie = '{$_SESSION['Desc_categorie']}'));";

        $ssql = "insert into detailsanomalie values((select Id_unite from unite where Nom_unite = '$nu'),(select Id_Ano from anomalie where Desc_ano = '{$_SESSION['Desc_Ano']}'),(select Id_statut from statut where Desc_statut = '$ds'),'$dd','$dpl','$dl','$st');";

        mysqli_query($con , $sql);

        mysqli_query($con , $ssql);

        header('location:../anomalie.php');

    }

    if(isset($_POST['delete'])){

        $delete = $_POST['Id_Ano'];

        $sqql = "delete from anomalie where Id_Ano = $delete ;";

        mysqli_query($con , $sqql);

        header('location:../anomalie.php');

    }
        
    if(isset($_POST['admin'])){
        $admin = $_POST['Email'];
        $query = "update usertable set access = 1 where Email = '$admin' ;";
        mysqli_query($con , $query);
        header('location:../access.php');
    }  

    if(isset($_POST['nonadmin'])){
        $admin = $_POST['Email'];
        $query = "update usertable set access = 0 where Email = '$admin' ;";
        mysqli_query($con , $query);
        header('location:../access.php');
    }  

    
    
    
    

    

?>