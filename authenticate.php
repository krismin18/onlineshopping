<?php
    session_start();
    if(empty($_POST['email'])){//return true when empty false when not empty
        header("Location:login.php");
    }else{
        $username = $_POST['email'];
    }
    if(empty($_POST['password'])){
        header("Location:login.php");
    }else{
        $password = $_POST['password'];
    }
        echo $username;
        echo $password;
    if($username == "abc" && $password == "abc"){
        $_SESSION['email']="abc";
        header("location:home.php");
    }else{

        header("location:login.php");
    }

    
   
?>