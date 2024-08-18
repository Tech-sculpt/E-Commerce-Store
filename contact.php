<?php
include 'header.php';
$Alert = false;
$Error = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
       include 'backend database.php';
       $username = $_POST["User-Name"];
       $password = $_POST["Password"];
       $cpassword = $_POST["Confirm-Password"];
       $email = $_POST["Email-ID"];
       $phone = $_POST["Phone-Number"];
       $address = $_POST["Address"];
       $check_query = "SELECT * FROM `user sign-up` WHERE `User Name`='$username' OR `Email ID`='$email'";
       $check_result = mysqli_query($connect, $check_query);
       if(mysqli_num_rows($check_result) > 0)
       {
        //$Error = "An account with the same username or email already exists.";
        echo "<script>alert('An account with the same username or email already exists.')</script>";
       }
       else if($password == $cpassword)
       {
            $dataentry = "INSERT INTO `user sign-up` (`User Name`, `Email ID`, `Password`, `Phone Number`, `Address`, `Date and Time`) VALUES ('$username', '$email', '$password', '$phone', '$address', current_timestamp())";
            $result = mysqli_query($connect, $dataentry);
            if ($result){
            $Alert = true;
            }
        }
       else{
       //$Error = "Passwords do not match";
       echo "<script>alert('Passwords Do Not Match')</script>";
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products-Red Store </title>

<link  rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
    if($Alert){
    header("location: http://localhost/E%20commerce%20Site/account.php");
}
    ?>


<br>
<br>
<br>
<br>



    <div class="container">
        <div class="header">
          <h1>Join our E-commerce community</h1>
          <span class="signupp" >Sign up today to start shopping.</span>
        </div>
        
        <form action="/E%20commerce%20Site/contact.php" method="POST" class="sign-up-form">
          <div class="input-group">
            <label for="User-name"> User Name</label>
            <input type="text" id="User-Name" name="User-Name" required />
          </div>

          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="Password" name="Password" required />
          </div>

          <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="Confirm-Password" name="Confirm-Password" required />
          </div>
         <?php echo $Error;?>
          

          <div class="input-group">
            <label for="email"id="formphoneno">Email</label>
            <input type="email" id="Email-ID" name="Email-ID" required />
          </div>

          <div class="input-group" id="formphoneno">
            <label for="phone number">Phone Number</label>
            <input type="text" id="Phone-Number" name="Phone-Number" required />
          </div>
  
          <div class="input-group">
            <label for="address">Address</label>
            <input type="text" id="Address" name="Address" required />
          </div>
  
          <button type="submit" class="btn">Sign Up</button>
        </form>
      </div>
    </body>
  </html>
  