<?php

require('../Classes/productclass.php');

function add_product_controller($category, $brand, $title, $price, $desc, $image,$keywords){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_product($category, $brand, $title, $price, $desc, $image,$keywords);

}

function retrieve_product_controller( $id){
    // create an instance of the Customer class
    $customer_instance = new Product();
    // call the method from the class
    return $customer_instance->select_one_product($id);
}

function read_categories_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->read_categories();

}
function read_brand_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->read_brand();

}

function update_product_controller($id, $title, $price, $desc,$keywords){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_product($id, $title, $price, $desc,$keywords);

}

function select_all_products_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_products();

}

function select_one_product_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_product($id);

}


/*Brand */
function select_one_brand_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_brand($id);

}

/*Category */
function select_one_category_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance ->select_one_category($id);

}


function getTotalItemsInCart(){
    $ip_add = getenv("REMOTE_ADDR");
    $product_instance = new Product();

    if (isset($_SESSION["user_id"])){
        $session = $_SESSION['user_id'];
        $response = $product_instance->getCartItemQty_Login($session);
    }
    $response = $product_instance->getCartItemQty($ip_add);

    if($response){
        $row = $product_instance->db_count();
        return ($row != null) ? $row : "0";
    }  else{
        return "0";
    }
}

?>