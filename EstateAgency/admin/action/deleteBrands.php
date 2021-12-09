<?php

require('../controllers/brandcontroller.php');


if(isset($_GET['deleteBrandID'])){

    $id = $_GET['deleteBrandID'];

    // call the function
    $result = delete_brand_controller($id);

    echo json_encode($result);
}


?>