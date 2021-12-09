<?php 


require('../controllers/brandcontroller.php');


$data = array();

if(isset($_POST['b_id'])){
    $b_id = $_POST['b_id'];
    $data = select_one_brand_controller( $b_id);
}


echo json_encode($data);



?>