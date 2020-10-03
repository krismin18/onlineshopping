<?php

$username = $_POST['username'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
$phone = $_POST['mnum'];
$gender = $_POST['gender'];


$conn = new mysqli("localhost","root","","ecomm") or die("Error:Connection failed");

        
    $SELECT = "SELECT user_email From users Where user_email = ? Limit 1";
    //Prepare statement
    $stmt = $conn->prepare($SELECT);

        if($stmt){
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
            $stmt->close();
        }else{
            echo "Something is wrong";
        }

                
        if($rnum==0){
            $sql = "INSERT into users (username,user_email,user_password,gender,phone) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if($stmt){
                $stmt->bind_param('ssssi', $username, $email, $password,$gender, $phone);
                $stmt->execute();
                $stmt->close();
            }else{
                echo "Something's wrong with the query: ";
            }
        }else{
            echo "user exist";
        }
        if($stmt ==false){
          die('prepare() failed: ' . htmlspecialchars($conn->error));
        }
?>              
               


