<?php
require('../Database/connection.php');

//extending means inheriting all the methods from connection
class Admin extends Connection{

//method for selecting a customer based on email
    function select_admin_givenEmail($email){
        return $this->fetchOne("select * from admin where email='$email'");
    }
}
?>