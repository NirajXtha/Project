<?php
    session_start();
    if(empty($_SESSION)){
        header("location: logintype.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/userdashboard.css?v=1">

    <title>Main Page</title>
</head>
<body>
<div class="top">
    <h1><a href="main.php" >E-PHARM</a></h1>

    <div class="search-container">
		<input type="text" placeholder="Search..." class="search-input">
		<button type="submit" class="search-button">Search</button>
	</div>

    <div class="camera">
    <img src="../assets/images/camera.png">&nbsp;
    <a href="upload.php">Upload Prescription</a>
    </div>
    
    <div class="user">
    <img src="../assets/images/user.png">
        <div class="account">
        <button class="account-btn">Account</button>
           <div class="user-content">
        <a href="logout.php" name="logout">Logout</a>
           </div>
        </div>  
    </div>
</div>
    
    <div class="nav">
        <nav>
         <ul>
            <li><a href="#"> Personal Care</a></li>
            <li><a href="#">Family Care</a></li>
            <li><a href="#">Wellness & Devices</a></li>
            <li><a href="#">Devices</a></li>
         </ul>
         </nav>
    </div>


<div class="main">
    <img src="../assets/images/main.jpg" style="width:1333px;height:525px;">
    <p>TAKING CARE OF YOUR SKIN <br>&nbsp; IS MORE IMPORTANT THAN</p>
    <h1>COVERING IT UP</h1>

    <div class="button">
    <button class="explore-btn">EXPLORE PRODUCTS</button>
    </div>
</div>

<!--baby section-->
<div class="product">
<h1>Baby Care
    <div id="line"></div>
       <div class="back">
    <img src="../assets/images/back.png">
       </div>
       <div class="next">
    <img src="../assets/images/next.png">
        </div>  
</h1>

    <div class="gradient-rect">
        <img src="../assets/images/baby.png">

        <div class="baby">
            <ul class="arrow">
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Baby & Infant Supplements</a></li>
            <li><a href="#">Diapers</a></li>
            <li><a href="#">Baby Bath Saops/ Gels/ Shampoos</a></li>
            <li><a href="#">Baby Personal Care</a></li>
            <li><a href="#">More.......</a></li>
            </ul>
        </div>
    </div>

    <div class="baby-products">
       <div class="box">
        <a href="#">
        <img src="../assets/images/Johnsons Baby Powder.jpeg">
        <h1>Johnsons Baby Powder</h1>
         <p>Rs.320.00</p>
         </a>
       </div>
     
  
       <div class="box">
        <a href="#">
       <img src="../assets/images/The Moms Co. Natural Baby Shampoo.jpeg">
       <h1>The Moms Co. Natural Baby Shampoo</h1>
         <p>Rs.1120.00</p>
         </a>
       </div>

       <div class="box">
        <a href="#">
       <img src="../assets/images/Himalaya Gentle Baby Soap.jpeg">
       <h1>Himalaya Gentle Baby Soap</h1>
         <p>Rs.99.00</p>
         </a>
       </div>

       <div class="box">
        <a href="#">
       <img src="../assets/images/Lactogen 1.jpeg">
       <h1>Lactogen 1 400gm</h1>
         <p>Rs.747.00</p>
         </a>
       </div>
     </div>
</div>

<!--wellness and fitness section-->
<div class="fit">
<h1>Wellness and Fitness
    <div id="line1"></div>
       <div class="back1">
    <img src="../assets/images/back.png">
       </div>
       <div class="next1">
    <img src="../assets/images/next.png">
        </div>  
</h1>

    <div class="gradient-rect1">
        <img src="../assets/images/fruit.png">

        <div class="fitness">
            <ul class="arrow">
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Health Food & Drinks</a></li>
            <li><a href="#">Health Supplements</a></li>
            <li><a href="#">Family Nutrition</a></li>
            <li><a href="#">More.......</a></li>
            </ul>
        </div>
    </div>

    <div class="fitness-products">
       <div class="box1">
        <a href="#">
        <img src="../assets/images/Pro complex gainer.jpeg">
        <h1>Pro Complex Gainer</h1>
         <p>Rs.1950.00</p>
         </a>
       </div>

       <div class="box1">
        <a href="#">
       <img src="../assets/images/Zandu nityam tablet.jpeg">
       <h1>Zandu Nityam tablet</h1>
         <p>Rs.50.00</p>
         </a>
       </div>

       <div class="box1">
        <a href="#">
       <img src="../assets/images/Sugar bear hair vitamin.jpeg">
       <h1>Sugar Hair Vitamin</h1>
         <p>Rs.1000.00</p>
         </a>
       </div>

       <div class="box1">
        <a href="#">
       <img src="../assets/images/Vegan dry algae omega.jpeg">
       <h1>Vegan Dry Algae Omega</h1>
         <p>Rs.2300.00</p>
         </a>
       </div>
     </div>
     </div>
</div>

<!--footer-->
<div class="footer">
    <div class="display">
    <div class="ways">
        <ul>
        <h1> Ways To Shop</h1> <br>
         <li><a href="#">New products</a></li>
        </ul>
    </div>

    <div class="info">
        <ul>
       <h1>Information</h1>  <br>
        <li><a href="">Privacy Policy</a></li>
        <li><a href="">Terms & Condition</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="">Shipping & Returns</a></li>
        </ul> 
    </div>

    <div class="account">
        <ul>
        <h1>My Account </h1><br>
        <li><a href="">My account</a></li>
        <li><a href="">Order</a></li>
        <li><a href="">Address</a></li>
        <li><a href="">About Us</a></li>
        </ul>   
    </div>

    <div class="about">
        <ul>
        <h1> About Us</h1> <br>
        <li>Address:Imadol Lalitpur</li>
        <li>Email:megangiri0527@gmail.com</li>
        <li>Phone:9803806203</li>
        <li>Hour:9:00 Am - 17:00 PM</li>
        </ul>   
    </div>
    </div>
</div>

<div class="foot">
    <p>Copyright &copy; E-PHARM 2023. All rights reserved.</p>
</div>


</body>
</html>