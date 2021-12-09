<?php

require('../Classes/cart_class.php');


function add_to_cart_controller($p_id,$ip_add,$c_id, $qty){
    $cart_instance = new Cart();
    return $cart_instance->add_to_cart($p_id,$ip_add,$c_id, $qty);
}

function add_to_cart_notLogin_controller($p_id,$ip_add, $qty){
    $cart_instance = new Cart();
    return $cart_instance->add_to_cart_notLogin($p_id,$ip_add, $qty);

}

//Validating the cart before adding
function getValidated_Controller($c_id, $p_id){
    $cart_instance = new Cart();
    return $cart_instance->getValidated($c_id, $p_id);
}

function select_all_products_cart_controller($ip_add){
    $cart_instance = new Cart();
    return $cart_instance->select_all_products_cart($ip_add);
}

function get_Cartitem(){
    $product_array = array();

    //create an instance of the product class
    $cart_instance = new Cart();
  
    //run the search product method
    $ip_add = getenv("REMOTE_ADDR");

    if (isset($_SESSION["user_id"])){
        $session = $_SESSION['user_id'];
        $product_records = $cart_instance->select_all_products_carts($session);
        
    }else{
        $product_records = $cart_instance->select_all_products_cart($ip_add);
        
    }
    
  
    if ($product_records) {
  
        //loop to see if there is more than one result
        //fetch one at a time
        while($rec = $cart_instance->db_fetch()){
            $product_array[] = $rec;

        }
           
      
    }
    return $product_array;
}

function getCartItemAmt_controller($ip_add){
    $cart_instance = new Cart();
    return $cart_instance->getCartItemAmt($ip_add);
}

//This selects carts given id, ip_add, and c_id
function select_one_cart_controller($p_id, $ip_add){
    $cart_instance = new Cart();
    return $cart_instance->select_one_cart($p_id, $ip_add);
}

/*Removing Items from Cart */
function remove_cart_controller($prod_id,$ip_add){
    $cart_instance = new Cart();
    return $cart_instance->remove_cart($prod_id,$ip_add);
}

function remove_carts_controller($prod_id,$session){
    $cart_instance = new Cart();
    return $cart_instance->remove_carts($prod_id,$session);
}




/*Getting the cartitemqty */

function getTotalItemsInCart(){
    $ip_add = getenv("REMOTE_ADDR");
    $cart_instance = new Cart();

    if (isset($_SESSION["user_id"])){
        $session = $_SESSION['user_id'];
        $response = $cart_instance->getCartItemQty_Login($session);
    }
    $response = $cart_instance->getCartItemQty($ip_add);

    if($response){
        $row = $cart_instance->db_count();
        return ($row != null) ? $row : "0";
    }  else{
        return "0";
    }
}


/*Update cart methods */
function updateCartQty($qty, $prod_id, $ip_add){ //not logged In
    $cart_instance = new Cart();
    return $cart_instance->updateCartQty_notLogin($qty, $prod_id, $ip_add);
}

function updateCartQty_Logged($qty, $prod_id, $session){ // logged In
    $cart_instance = new Cart();
    return $cart_instance-> updateCartQty_Login($qty, $prod_id, $session);
}

function updateCart_CID($session){
    $cart_instance = new Cart();
    return $cart_instance->updateCart_CID($session);
}

/*Orders and Payment */

function insert_order_controller($user_id, $invoice, $status){
    $cart_instance = new Cart();
    return $cart_instance->insert_order($user_id, $invoice, $status);
}

function insertpayment_controller($amount, $user_id, $order_id,$cc){
    $cart_instance = new Cart();
    return  $cart_instance->insertpayment($amount, $user_id, $order_id,$cc);
}

function insert_order_details_controller($order_id, $product_id, $qty){
    $cart_instance = new Cart();
    return $cart_instance->insert_order_details ($order_id, $product_id, $qty);
}

function recentOrder(){
    $cart_instance = new Cart();
    return $cart_instance->recentOrder();
}

function getOrder($ord_id){
    $cart_instance = new Cart();
    return $cart_instance->getOrder($ord_id);
}

function getOrderDetails($ord_id){
    $cart_instance = new Cart();
    return $cart_instance->getOrderDetails($ord_id);
}

function getTotalItemAmountInCart(){
    $ip_add = getenv("REMOTE_ADDR");
    $cart_instance = new Cart();
    return $cart_instance->getCartItemsAmount($ip_add);
}

function delete_cart_controller($user_id){
    $cart_instance = new Cart();
    return $cart_instance->cart_whole_delete($user_id);
}



?>