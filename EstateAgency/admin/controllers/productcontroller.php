<?php

require('../classes/productclass.php');

function add_product_controller($category, $brand, $title, $price, $desc, $image,$keywords){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance->add_product($category, $brand, $title, $price, $desc, $image,$keywords);

}

function read_one_categories_controller($id){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance-> read_one_category($id);

}
function read_brand_controller(){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance->read_brand();

}

function update_product_controller($id, $title, $price, $desc){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance->update_one_product($id, $title, $price, $desc);

}
function delete_product_controller($id){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance->delete_one_product($id);

}

function select_all_products_controller(){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance->select_all_products();

}

function select_one_product_controller($id){
    // create an instance of the Product class
    $item_instance = new Item();
    // call the method from the class
    return $item_instance->select_one_product($id);
}

function getOrder(){
    $item_instance = new Item();
    return $item_instance->getOrder();
}
