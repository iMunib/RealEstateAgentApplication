<?php
include('connection.php');
include('signupdb.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script type="text/javascript" src="script.js" defer></script>
    <title>Signup</title>
</head>


<body>
    
    <div class="signup-first-div">
        <h3 class="signup-header">Signup</h3>
        <form class="signup-form" method="post" onsubmit="return validate();" action="signupdb.php">
            <div class="signup-name">
                <input type="text" id="signup-firstname" size="22" placeholder="First Name" name="firstName">
                <input type="text" id="signup-lastname" size="22" placeholder="Last Name" name="lastName">
            </div>
            <div class="signup-email">
                <input type="text" id="signup-email" size="50" name="email" placeholder="Enter your email...">
            </div>
            <div class="signup-password">
                <input type="password" id="signup-passwordID" size="50" name="password" placeholder="Password(8 characters minimum)">
            </div>
            <div class="signup-password2">
                <input type="password" id="signup-password2" size="50" placeholder="Confirm Password">
            </div>
            <div class="signup-button">
                <button id="signup-submit" type="submit" value="Sign Up">Sign up</button>
            </div>
        </form>
    </div>
</body>