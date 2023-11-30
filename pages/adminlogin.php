<?php
include "dbconfig.php";
if(isset($_POST['login'])){
    $username = $_POST['adminname'];
    $password = $_POST['password'];
    
    
    $sql = "SELECT * FROM users WHERE usertype = 'admin'";

    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_admin = $row['username'];
        if($username==$db_admin){
            if($password == $db_password){
                header('location:../admin/admindashboard.php');
                session_start();
                $_SESSION['adminname']=$db_admin;
                break;
                
            }else{
                echo "Incorrect Password";
            }
        }
        else{
          echo "Incorrect Username";
        }

        
        
    }
  

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/adminlogin.css">
    <title>Admin Login</title>
</head>
<body>
<?php
    if(isset($_GET['status'])==1){?>
      <div class="login_error">
        Invalid Email or Password
      </div>
      <?php
    }
    
    ?>

<div class="container">
    <div class="form-container">
 

      <form action="./adminlogin.php" method="post">
        <h2>Login</h2>

        <div class="input-group">
    
          <label for="name">Name</label>
          <input type="text" id="name" name="adminname" required>
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>


        <div class="input-group">
          <input type="submit" class="btn" name="login" value="Login">
        </div>

        <p>Not a member? <a href="userregistration.php">SignUp</a> </p>

      </form>
    </div>
  </div>

  <div class="image-container">
    <img src="../assets/images/Loginphoto.jpg">
  </div>
</body>
</html>