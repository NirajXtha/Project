<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/view Products.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
 
<body>
   
     <header> 
 <!--E-pharm-->
        <div class="logosec">
            <div class="logo">E-PHARM</div>
            <i class="fa-solid fa-bars fa-2xl" class="menuicon" id="menuicon"></i>      
        </div>   

    </header>  

    <!--dash--> 
    <div class="Dashboard">
        <div class="nav-bar">

            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="option1">
                
                        <h3> Dashboard</h3>
                    </div>
 
                    <div class="option2">
                        <i class="fa-solid fa-shop fa-2xl" style="color:#2E6A99;"  class="icon"></i>
                           <h3><a href="viewproducts.php"> Products</a></h3>
                    </div>
 
                
 
                    <div class="option4">
                        <i class="fa-solid fa-cart-shopping fa-2xl" style="color:#2E6A99;"  class="icon"></i>
                        <h3><a href="vieworder.php">Orders</a> </h3>
                    </div>
 
                    <div class="option3">
                        <i class="fa-solid fa-users fa-2xl " style="color:#2E6A99;"  class="icon"></i>
                        <h3><a href="prescription.php">Prescription</a> </h3>
                    </div>

 
                    <div class="logout">
                        <i class="fa-solid fa-right-from-bracket fa-2xl" style="color:#2E6A99;"  class="nav-img"></i>
                        <h3><a href="logout.php">Logout</a></h3>
                    </div>
 
                </div>
            </nav>  

     
              
<div class="main" >
  <h2>Product Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="head">S.N.</th>
        <th class="head">Product Image</th>
        <th class="head">Product Name</th>
        <th class="head">Product Description</th>
        <th class="head">Category Name</th>
        <th class="head">Unit Price</th>
        <th class="head" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../pages/dbconfig.php";
      $sql="SELECT * from product";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
    <td><?=$count?></td>
      <td><img height='100px' src='../assets/images/<?=$row["product_image"]?>'></td>
      <td><?=$row["product_name"]?></td>
      <td><?=$row["product_desc"]?></td>      
      <td><?=$row["category"]?></td> 
      <td><?=$row["product_price"]?></td>     
      <td><a href="delete.php?id=<?=$row['pid']?>"><button>DELETE</button></a></td>
      <td><a href="update.php?id=<?= $row['pid'] ?>"><button>Edit</button></a></td>


      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
      
  </table> 

 <button class="add-btn" id="myBtn"><a href="addproduct.php">Add Product</a></button>
</div>

</body>
</html>