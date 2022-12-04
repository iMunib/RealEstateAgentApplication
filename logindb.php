<?php
try {
    include 'connection.php';
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

try {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            header('location: ./searchpage.php');
        } else {
            echo '<script>alert("Please Provide a valid Email or Password")</script>';
            echo '<script> window.location.href = "./index.php"; </script>';
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
