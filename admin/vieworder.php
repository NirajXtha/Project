<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/view Products.css">
    <link rel="script" href="../assets/js/product.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
 
<body>
   
     <header> 
 <!--E-pharm-->
        <div class="logosec">
            <div class="logo">E-PHARM</div>
            <i class="fa-solid fa-bars fa-2xl" class="menuicon" id="menuicon"></i>      
        </div>   
 <!--Search-->
         <div class="search">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <i class="fa-solid fa-magnifying-glass fa-2xl"  class="searchicon"></i>      
              </div>
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
                        <h3><a href="vieworder.php"> Orders</h3>
                    </div>
 
                    <div class="option5">
                        <i class="fa-solid fa-clipboard-user fa-2xl" style="color:#2E6A99;"  class="icon"></i>
                        <h3><a href="prescription.php">Prescription</h3>
                    </div>
 
                    <div class="logout">
                        <i class="fa-solid fa-right-from-bracket fa-2xl" style="color:#2E6A99;"  class="nav-img"></i>
                        <h3>Logout</h3>
                    </div>
 
                </div>
            </nav>  

     
              
<div class="main" >
  <h2>Customer Order</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="head">S.N.</th>
        <th class="head">Patient Name</th>
        <th class="head">Patient Email </th>
        <th class="head">Patient Address</th>
        <th class="head">Gender</th>
      </tr>
    </thead>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>      
      <td></td> 
      </tr>


      </div>
  </table> 




</body>
</html>