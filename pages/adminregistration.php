<?php
$conn = mysqli_connect('localhost','root','','e_pharm');
if(isset($_POST['register'])){
    $admin_name = $_POST['adminname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password,PASSWORD_BCRYPT);
    $address = $_POST['address'];
    $job_title = $_POST['job-title'];

    $sql = "INSERT into admin(admin_name, email,address, job_title, password)
    values('$admin_name','$email','$address', '$job_title','$hashed_password')";

    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:adminlogin.php');
    }else{
        echo "Fail";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign Up</title>
    
<link rel="stylesheet" href="../assets/css/adminregistration.css?v=1">

</head>
<body>
<div class="admin">
 <form action="adminregistration.php" method="post">
  <h2>Admin Signup</h2>

  <div class="form">

  <label for="username">Adminname:</label>
  <input type="text" id="adminname" name="adminname" required><br><br> 

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br><br>

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required><br><br>

  <label for="job-title">Job Title:</label>
  <input type="text" id="job-title" name="job-title"><br><br>

  <button class="register-btn" name="register">
       <a href="adminlogin.php">Register</a>
</button>
</div>

 </div>
</body>
</html>