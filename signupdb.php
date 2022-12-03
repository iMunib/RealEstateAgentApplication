<?php 
    include ('connection.php');
    $conn;


if (isset($_REQUEST['signup_button'])) {
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo "<pre>";
    echo $firstName;
    echo $lastName;
    echo $email;
    echo $password;
    echo "<pre>";
}
else{
    echo "Not set FROM SIGN UPPPPPPPP";

    
    
// first check the database to make sure a user does not already exist with the same email
//   $user_check_query = "Select * from users where email='$email'";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);

//   if ($user['email'] === $email) {
//       echo "email already exists";
//     }
// echo "hello end";

//   // Finally, register user if there are new user
  	$query = "INSERT INTO signup (firstName,lastName, email, password) 
  			  VALUES('$firstName','$lastName', '$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['firstName'] = $firstName;
  	$_SESSION['success'] = "You are now logged in";
  	// header('location: index.php');
      echo "hello end";
}
    

