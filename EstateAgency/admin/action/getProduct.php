<?php 


include_once('../controllers/productcontroller.php');

// include_once('../controllers/categorycontroller.php');

// include_once('../controllers/brandcontroller.php');

$msg;


$data = select_all_products_controller();

$category = array();
$brand = array();


foreach($data as $item) { 
    $c_id = $item['product_cat'];
    $b_id = $item['product_brand']; 

    // $msg["category"] = select_one_category_controller($c_id);

    // $msg["brand"] = select_one_brand_controller($b_id);

}

$msg["product"] = $data;
// echo $uses;


echo json_encode($data);



?>