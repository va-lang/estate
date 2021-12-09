<?php

require('../controllers/categorycontroller.php');

if(isset($_POST['updatebutton'])){

    $id = $_POST['cat_id'];
    $name = $_POST['cat_name'];
   

    // call the function
    $result = update_category_controller($id, $name);

    echo json_encode($result);

    // if($result){
    //     header("Location: ../brands.php");
    // } else {
    //     echo "Update failed";
    // } 
}


?>