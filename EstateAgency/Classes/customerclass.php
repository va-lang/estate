<?php

require('../Database/connection.php');

//extending means inheriting all the methods from connection
class Customer extends Connection{

    //methods for adding product
    function add_customer($full_name, $email, $password,$country, $city, $contact_number){
        //retrun true or false
        return $this->query("insert into customer(customer_name,customer_email,customer_pass, customer_country, customer_city, customer_contact) values('$full_name', '$email', '$password','$country', '$city', '$contact_number')");
    }

    //methods for selecting all products
    function select_all_customers(){
        //return array or false
        return $this->fetch("select * from customer");

    }

    //method for deleting one product
    function delete_one_customer($id){
        //return true or false
        return $this->query("delete from customer where customer_id = '$id'");
    }

    //method for update one product
    function update_one_customer($full_name, $email, $password,$country, $city, $contact_number){
        //return true or false
        return $this->query("update customer set customer_name='$full_name', customer_email='$email', customer_pass='$password',customer_country='$country', customer_city='$city', customer_contact='$contact_number' where id='$id'");
    }

    //method for selecting one customer
    function select_one_customer($id){
        //return associative array or false
        return $this->fetchOne("select * from customer where customer_id='$id'");
    }


    //method for selecting a customer based on email
    function select_customer_givenEmail($email){
        return $this->fetchOne("select * from customer where customer_email='$email'");
    }

    function updateCart_CID($session, $ip_add){
        return $this->query("update cart set c_id='$session' where ip_add='$ip_add'");
    }
}

?>
