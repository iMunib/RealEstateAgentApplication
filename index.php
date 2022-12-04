<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <script defer src="script.js"></script>
  <title>Welcome</title>
</head>

<body id="index-body">
  <div class="main-container">



    <div class="login-image">
      <img src="./images/realestateimg.jpg" alt="picture of a home">
    </div>



    <div class="login-form">
      <div class="container">
        <div class="form-level-1">
          <div class="form-level-2">
            <h3 id="main-h3-head">Welcome to Royal LePage</h3>
            <form action="logindb.php" method="POST">

              <div class="form-email">
                <input type="text" class="form-control" placeholder="Enter your email..." id="email" name="email">
              </div>

              <div class="form-password">
                <input type="password" class="form-control" placeholder="Enter your password..." id="password" name="password">
              </div>

              <div id="submit-main-div">
                <input id="main-submit" type="submit" value="Log In" name="submit">
              </div>

              <span id="main-create-account"><a href="./Signup.php">Click here to create account</a></span>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>