<?php 
    include ('connection.php');


if (isset($_POST['submit'])) {
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

// first check the database to make sure a user does not already exist with the same email
//   $user_check_query = "Select * from users where email='$email'";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);

//   if ($user['email'] === $email) {
//       echo "email already exists";
//     }

  // Finally, register user if there are new user
  	$query = "INSERT INTO signup (firstName,lastName, email, password) 
  			  VALUES('$firstName','$lastName', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['firstName'] = $firstName;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');

}
    

