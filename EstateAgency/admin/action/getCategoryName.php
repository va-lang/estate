<?php 


require('../controllers/categorycontroller.php');


$data = array();

if(isset($_POST['cat_id'])){
    $cat_id = $_POST['cat_id'];
    $data = select_one_category_controller( $cat_id);
}


echo json_encode($data);



?>