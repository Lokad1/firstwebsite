<?php

session_start();

$con = mysqli_connect('localhost','root','loklok');

mysqli_select_db($con,'userregistration');

$name = $_POST['username'];

$pass = $_POST['password'];

$s = " select access from usertable where name = '$name' && password = '$pass' "; 

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);

$access = $row['access'];


    if($num == 1 ){
        $_SESSION['username'] = $name ;
        //Redirection vers la page de login
        if($access == 1 && strcmp($name,"lokman") == 0){
            header('location:../homead.php');
        }else if($access == 1){
            header('location:../home.php');
        }else if($access == 0){
            header('location:../homenon.php');
        }
        

    }else{

            header('location:../login.php?errornum=1');

        }

        if(isset($_GET['buttonh'])){
            $sql = "select name from usertable where name = 'lokman' ;";
            $resultat = mysqli_query($con , $sql);
            $row = mysqli_fetch_assoc($resultat);
           if($_SESSION['username'] == "lokman"){
                header('location:../homead.php');
           }else{
                header('location:../home.php');
           }
            
        }

    


?>