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
 
                    <div class="option3">
                        <i class="fa-solid fa-users fa-2xl " style="color:#2E6A99;"  class="icon"></i>
                        <h3><a href="viewcustomers.php">Customers</a> </h3>
                    </div>
 
                    <div class="option4">
                        <i class="fa-solid fa-cart-shopping fa-2xl" style="color:#2E6A99;"  class="icon"></i>
                        <h3> Orders</h3>
                    </div>
 
                    <div class="option5">
                        <i class="fa-solid fa-clipboard-user fa-2xl" style="color:#2E6A99;"  class="icon"></i>
                        <h3> <a href="stock.php">Stock</a></h3>
                    </div>
 
                    <div class="logout">
                        <i class="fa-solid fa-right-from-bracket fa-2xl" style="color:#2E6A99;"  class="nav-img"></i>
                        <h3>Logout</h3>
                    </div>
 
                </div>
            </nav>  

     
              
<div class="main" >
  <h2>Prescription</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="head">S.N.</th>
        <th class="head">Prescribed By</th>
        <th class="head">Product</th>
        <th class="head">Status</th>
      </tr>
    </thead>
    <?php
        include '../pages/dbconfig.php';
        $sql = mysqli_query($conn,"SELECT * FROM prescription WHERE status = 'Pending'");
        while($row = mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <td><?=$row['pid']?></td>
            <td><?=strtoupper($row['username'])?></td>
            <td><img src="../assets/images/<?=$row['prescription']?>" alt="Prescription"></td>
            <td><?=$row['status']?></td>
        </tr>
       <?php }
    ?>

</table>
</div>
</body>
</html>