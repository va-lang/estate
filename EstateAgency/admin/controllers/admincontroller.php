<?php

require('../Classes/adminclass.php');

function select_admin_givenEmail_controller($email){
    //create an instance of the product class
    $customer_instance = new Admin();
    //call the method from the class
    return $customer_instance->select_admin_givenEmail($email);
}


?>