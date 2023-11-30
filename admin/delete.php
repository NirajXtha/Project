<?php
$id = $_GET['id'];
include '../pages/dbconfig.php';
$sql = mysqli_query($conn,"DELETE FROM product WHERE pid = $id");
if($sql){
    echo '<script> alert("Successfully Deleted!"); location.assign("viewproducts.php");</script>';
}else{
    echo '<script> alert("Unknown error occurred!"); location.assign("viewproducts.php");</script>';
}