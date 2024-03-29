<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "agents";

$id = "";
$fname = "";
$lname = "";
$age = "";
$email = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['age'];
    $posts[4] = $_POST['email'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM users WHERE id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $age = $row['age'];
                $email = $row['email'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `users`(`id`, `fname`, `lname`, `age` , `email`) VALUES ($data[0],'$data[1]','$data[2]',$data[3],'$data[4]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `users` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `users` SET `id`=$data[0],`fname`='$data[1]',`lname`='$data[2]',`age`=$data[3],`email`='$data[4]' WHERE `id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE Html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Admin Page</title>
    </head>

    <body>
    <header id="nav-header">
        <div class="container">
        </div>
        <nav id="main-navbar">
            <ul id="nav-links">
                <li><a href="index.php">Logout</a></li>
                <li><a href="searchpage.php">Search</a></li>
                <li><a href="agentsDetails.php">Admin</a></li>
            </ul>
        </nav>
    </header>
        <h2 id="header-agrentdetail">Admin Page</h2>
        <div id="details-form-Field-div">
            <form action="agentsDetails.php" method="post" id="agentdetails-form">
                <input type="number" name="id" placeholder="Agent Id" value="<?php echo $id;?>"><br><br>
                <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"><br><br>
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>"><br><br>
                <input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"><br><br>
                <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>"><br><br>
                </div>
                <div id="agentsdetails-buttons">

                    <input type="submit" name="insert" value="Add">
                
                    <input type="submit" name="update" value="Update">
                
                    <input type="submit" name="delete" value="Delete">
                
                    <input type="submit" name="search" value="Find">
                </div>
            </form>
        
    </body>
</html>