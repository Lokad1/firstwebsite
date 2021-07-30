<?php

session_start();

$con = mysqli_connect('localhost','root','loklok');

mysqli_select_db($con,'userregistration');

$name = $_POST['username'];

$pass = $_POST['password'];

$email = $_POST['Email'];

$q = " select * from usertable where name = '$name' ;"; 

$qu = "select * from usertable where email = '$email' ;";

$re = mysqli_query($con , $q);

$numero = mysqli_num_rows($re);

$resultatt = mysqli_query($con , $qu);

$nume = mysqli_num_rows($resultatt);



if($numero == 1){
    header('location:../register.php?errornum=1');
}else if($numero == 0){
  
    if($nume == 1 ){
        
        header('location:../register.php?errornum=2');
    
    }else if($nume == 0){
        $reg = " insert into usertable(name , password , Email) values ('$name' , '$pass', '$email');";
        mysqli_query($con , $reg);
        header('location:../register.php?errornum=0');
    }
}




?>