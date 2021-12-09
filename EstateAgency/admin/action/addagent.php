<?php

require('../controllers/agentcontroller.php');

// check if theres a POST variable with the name 'addAgent'
if(isset($_POST['addAgent'])){
    $tm = md5(time()); 
    // retrieve the name, description and quantity from the form submission
   
    $full_name = $_POST['name'];
    $email =  $_POST['email'];
    $city = $_POST['city'];
    $contact_number = $_POST['contact'];
    $image_name = $_FILES['image']['name'];
    $dst='../images/'.$tm.$image_name;
    $image_type = $_FILES['image']['type'];
    
    if (
        !empty($_FILES['image']['tmp_name'])
        && file_exists($_FILES['image']['tmp_name'])
    ) {
        $data = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        $allowed = array("image/jpeg", "image/gif", "image/png", "image/jpg");

        if (!in_array($image_type, $allowed)) {
            //$error_message = 'Only jpg, gif, and png files are allowed.';
            header("Location: ../views/forms/prisonerForm.php?error=wrongImage");
            exit();
        } else {
            move_uploaded_file($_FILES['image']['tmp_name'], $dst);
        }
    }
   
     
   
    // call the add_agent_controller function: return true or false
    // $image=$dst;

    $result = add_agent_controller($full_name, $email,  $city, $contact_number, $dst);


    echo json_encode($result);

}





?>