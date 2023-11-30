<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <link rel="stylesheet" href="../assets/css/userlogin.css">
  
</head>
<body>


  <div class="container">
    <div class="form-container">
 

      <form action="userlogin.php" method="post">
        <h2>Login</h2>

        <div class="input-group">
    
          <label for="name">Name</label>
          <input type="text" id="name" name="username" required>
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>

        <?php
        include 'dbconfig.php';
          if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password' AND usertype = 'user'");
            if(mysqli_num_rows($sql) > 0){
              $_SESSION['username'] = $username;
              $_SESSION['usertype'] = 'user';
              header('location: userdashboard.php');
            }
            else{
              echo 'Incorrect Username or Password';
            }
          }
        ?>
        <div class="input-group">
          <input type="submit" class="btn" name="login" value="Login">
        </div>

        <p>Not a member? <a href="registration.php">SignUp</a> </p>

      </form>
    </div>
  </div>

  <div class="image-container">
    <img src="../assets/images/Loginphoto.jpg">
  </div>

</body>
</html>

