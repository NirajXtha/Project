<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/addproduct.css?v=1">
    <title>Add Product</title>
</head>
<body>
<div class="add-product">

<h4 class="title">New Product Item</h4> <br>
<button type="button" class="close" >&times;</button>
</div>

<div class="body">
<form method="POST" action="addproduct.php" enctype="multipart/form-data">
  <div class="form">
    <label for="name">Product Name:</label><br>
    <input type="text" class="form-control" id="p_name" name="name" required>
  </div>
  <div class="form">
    <label for="price">Price:</label><br>
    <input type="number" class="form-control" id="p_price" name="price" required>
  </div>
  <div class="form">
    <label for="qty">Description:</label><br>
    <input type="text" class="form-control" id="p_desc" name="desc" required>
  </div>
  <div class="form">
    <label>Category:</label>
    <select id="category" name="cat">
      <option>Baby Care</option>
      <option>Fitness and wellness</option>
      <option>Medicine</option>
      

    </select>
  </div>
  <div class="form">
      <label for="file">Choose Image:</label>
      <input type="file" class="file" id="file" name="image">
  </div>
  <div class="form">
    <input type="submit" class="upload" id="upload" style="height:40px" value="Add Item" name="submit">
  </div>
</form>

</div>

<button type="button" class="close" data-dismiss="modal" style="height:40px">Close</button>

</div>

</div>
</div>

</div>  
</div>
</body>
</html>
<?php
include '../pages/dbconfig.php';
if(isset($_POST['submit'])){
  if(isset($_FILES['image'])){
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    
    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    if($error === 0){
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

			$new_img_name = uniqid("IMG-",true).'.'.$img_ex;
			$img_upload_path = '../assets/images/'.$new_img_name;
			move_uploaded_file($tmp_name, $img_upload_path);

      $sql = mysqli_query($conn,"INSERT INTO product (product_name,product_desc,category,product_price,product_image) VALUES ('$name','$desc','$cat',$price,'$new_img_name')");
      if($sql){
        echo '<script> alert("Successfully inserted!"); location.assign("admindashboard.php");</script>';
      }else{
        echo '<script> alert("Something went wrong!"); window.history.back();</script>';
      }
    }else{
        echo '<script> alert("Unknown error occurred!"); window.history.back();</script>';
    }
  }
}
