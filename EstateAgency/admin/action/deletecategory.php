<?php

require('../controllers/categorycontroller.php');


if(isset($_GET['deleteCategoryID'])){

    $id = $_GET['deleteCategoryID'];

    // call the function
    $result = delete_category_controller($id);

    echo json_encode($result);
}


?>