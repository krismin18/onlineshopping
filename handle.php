<?php
    if(empty($_POST['username'])){//return true when empty false when not empty
        header("Location:login.php");
    }else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        header("Location:login.php");
    }else{
        $password = $_POST['password'];
    }
  
?>