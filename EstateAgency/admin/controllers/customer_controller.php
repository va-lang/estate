<?php

require('../Classes/customerclass.php');

function add_customer_controller($full_name, $email, $password,$country, $city, $contact_number){
    //create an instance of the product class
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->add_customer($full_name, $email, $password,$country, $city, $contact_number);

}

function delete_customer_controller($id){
    //create an instance of the product class
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->delete_one_customer($id);
    
}





function select_all_customers_controller(){
    //create an instance of the product class
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->select_all_customers();
    
}

function select_one_customer_controller($id){
    //create an instance of the product class
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->select_one_customer($id);
    
}

function select_customer_givenEmail_controller($email){
    //create an instance of the product class
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->select_customer_givenEmail($email);
}
?>