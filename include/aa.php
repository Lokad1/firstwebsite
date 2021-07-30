<?php

    

    $con = mysqli_connect('localhost','root','loklok','userregistration');

    
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