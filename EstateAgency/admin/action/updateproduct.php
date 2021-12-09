<?php

require('../controllers/productcontroller.php');

if(isset($_POST['updateProduct'])){

    $id = $_POST['pid'];
    $title = $_POST['prod_title'];
    $price =  $_POST['prod_price'];
    $desc = $_POST['prod_desc'];
    // $keywords = $_POST['keywords'];  
   

    // call the function
    $result = update_product_controller($id, $title, $price, $desc);

    echo json_encode($result);

    // if($result){
    //     header("Location: ../brands.php");
    // } else {
    //     echo "Update failed";
    // } 
}


?>