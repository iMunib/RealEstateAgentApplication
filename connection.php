<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $connection= new mysqli('localhost','root','','Signup');
    if($connection->connect_error){
        die('Connection Failed : '.$connection->connect_error);
    }
    else{
        $stmt=$connection->prepare("insert into signup(firstName,lastName,email,password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstName,$lastName,$email,$password);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $connection->close();
    }
?>