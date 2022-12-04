<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "agents";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO signup(firstName,lastName,email,password) VALUES(?,?,?,?)");
        $stmt = bind_param("ssss",$firstName,$lastName,$email,$password);
        $stmt->execute();
        echo "Registration Successful!!";
        $stmt->close();
        $conn->close();
    }
?>

