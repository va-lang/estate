<?php

require('../controllers/productcontroller.php');


if(isset($_POST['DELETE_PRODUCT'])){

    $id = $_POST['pid'];

    // call the function
    $result = delete_product_controller($id);

    echo json_encode($result);
}


?>