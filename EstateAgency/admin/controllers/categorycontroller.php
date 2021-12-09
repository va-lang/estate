<?php

require('../classes/categoryclass.php');

function add_category_controller($name){
    // create an instance of the Product class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->add_category($name);

}

function delete_category_controller($id){
    // create an instance of the Product class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->delete_one_category($id);

}

function update_category_controller($id, $name){
    // create an instance of the Product class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->update_one_category($id, $name);

}

function select_all_categories_controller(){
    // create an instance of the Product class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_all_categories();

}

function select_one_category_controller($id){
    // create an instance of the Product class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_one_category($id);

}
