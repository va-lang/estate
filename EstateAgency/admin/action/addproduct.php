<?php

require('../controllers/productcontroller.php');

// check if theres a POST variable with the name 'addProductButton'
if(isset($_POST['addProduct'])){
    $tm = md5(time()); 
    // retrieve the name, description and quantity from the form submission
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $title = $_POST['title'];
    $price =  $_POST['price'];
    $desc = $_POST['desc'];
    $image_name = $_FILES['image']['name'];
    $keywords = $_POST['keywords'];
    $dst='../images/'.$tm.$image_name;
    $image_type = $_FILES['image']['type'];
    
    if (
        !empty($_FILES['image']['tmp_name'])
        && file_exists($_FILES['image']['tmp_name'])
    ) {
        $data = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        $allowed = array("image/jpeg", "image/gif", "image/png", "image/jpg");

        if (!in_array($image_type, $allowed)) {
            //$error_message = 'Only jpg, gif, and png files are allowed.';
            header("Location: ../views/forms/prisonerForm.php?error=wrongImage");
            exit();
        } else {
            move_uploaded_file($_FILES['image']['tmp_name'], $dst);
        }
    }
   
     
   
    // call the add_product_controller function: return true or false
    // $image=$dst;

    $result = add_product_controller($category, $brand, $title, $price, $desc, $dst,$keywords);


    echo json_encode($result);

}





?>