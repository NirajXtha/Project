<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="Prescription">Upload your Prescription: </label>
        <input type="file" name="image" id="">
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>
<?php
    session_start();
    include 'dbconfig.php';
    if(isset($_POST['submit'])){
        if(isset($_FILES['image'])){
            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];
            $username = $_SESSION['username'];

            if($error === 0){
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

				$new_img_name = uniqid("IMG-",true).'.'.$img_ex;
				$img_upload_path = '../assets/images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

                $sql = mysqli_query($conn,"INSERT INTO prescription (username,prescription) VALUES ('$username','$new_img_name')");
                if($sql){
                    echo '<script> alert("Successfully inserted!"); location.assign("userdashboard.php");</script>';
                }else{
                    echo '<script> alert("Something went wrong!"); window.history.back();</script>';
                }
            }else{
                echo '<script> alert("Unknown error occurred!"); window.history.back();</script>';
            }
        }
    }
?>

	
