<?php

require('../Controllers/customer_controller.php');

if(isset($_POST['submit'])){

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $country =  $_POST["country"];
    $city = $_POST["city"];
    $contact_number = $_POST["contact"];

    $result = add_customer_controller($full_name, $email, $password,$country, $city, $contact_number);

    if($result === true){
        echo ("<script>alert('Sucessfully Registered!'); window.location.href = '../Login/login.php';</script>");
        //header("Location: ../Login/login.php");
    }else{
        echo "insertion not successful!";
    }
   
}

?>