<?php

require('../controllers/brandcontroller.php');

if(isset($_POST['updateBrandID'])){

    $id = $_POST['brand_id'];
    $name = $_POST['brand_name'];
   

    // call the function
    $result = update_brand_controller($id, $name);

    echo json_encode($result);

    // if($result){
    //     header("Location: ../brands.php");
    // } else {
    //     echo "Update failed";
    // } 
}


?>