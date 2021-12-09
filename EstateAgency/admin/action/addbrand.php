<?php

require('../controllers/brandcontroller.php');

// check if theres a POST variable with the name 'addProductButton'
if(isset($_POST['addBrandButton'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['name'];

   
    // call the add_product_controller function: return true or false
    $result = add_brand_controller($name);

    echo json_encode($result);

}





?>