

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" href="../assets/css/userregistration.css?v=1">

    <title>User registration</title>
</head>


<body>

    
    <form action="registration.php" method="post">
    <div class="user">
    <h2>User Sign Up</h2>
   
      <div class="form">
        <label for="name">Username</label>
        <input type="text" id="name" name="name" placeholder="Enter username" autocomplete="off" required><br><br>
      
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="abc@gmail.com" autocomplete="off" 
        value="" required><br><br>
    
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="******" required><br><br>
    
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="******"  required> 

        <input class="btn" type="submit" name="submit" value="Sign Up">
        </form>
       <a href="userlogin.php">Sign In </a>
   
  </div>
  </div>


</body>
</html>

<?php
include 'dbconfig.php';
  if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm = $_POST['confirm-password'];

    if($pass != $confirm){
      echo "Incorrect Password";
    }else{
      $sql = mysqli_query($conn,"INSERT INTO users (username,email,password) VALUES('$username','$email','$pass')");
      if($sql){
        header('location: userlogin.php');
      }else{
        echo '<script>alert("Something went wrong!")</script>';
      }
    }
  }
?>