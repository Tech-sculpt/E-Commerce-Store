<?php
include 'header.php';
$Error = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
       include 'backend database.php';
       $username = $_POST["User-Name"];
       $password = $_POST["Password"];
       $dataselect =" SELECT * FROM `user sign-up` WHERE `User Name`='$username' AND `Password`='$password'";
            $result = mysqli_query($connect, $dataselect);
            $num = mysqli_num_rows($result);
    if ($num == 1){
            session_start();
            $_SESSION['logged-in'] = true;
            $_SESSION['User-Name'] = $username;
            echo "<script>
            alert('Welcome To Our store $username !!!!!');
            window.location.href = 'http://localhost/E%20commerce%20Site/index.php';
          </script>";
    exit;
} else {
    echo "<script>alert('Invalid Details')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log-in Your Account</title>

<link  rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>




        <div class="login-container">
            <h2>Login to Your Account</h2>
            <form action="/E%20commerce%20Site/account.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="User-Name" name="User-Name" required>
    
                <label for="password">Password:</label>
                <input type="password" id="Password" name="Password" required>
    
                <input type="submit" value="Login">
            </form>
            <div class="signup-link">
                Don't have an account? <a href="/E%20commerce%20Site/contact.php">Sign up here</a>
            </div>
        </div>
    
    
    
    
    
    
    
    

    
    
   














        
    








