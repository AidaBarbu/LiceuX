<?php

session_start();
$user='ABC';
$pass='pass';
$message="";
if((!(empty($_POST['username'])))||(!(empty($_POST['password'])))){
    if(($_POST['username']==$user)&&($_POST['password']==$pass)){
        $_SESSION['username']=$_POST['username'];
        header("Location:dateLiceu.php");
    }
    else{
        header("location:index.php");
    }
}else{
        header("location:index.html");
    }
    echo $message;
?>