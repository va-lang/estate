<?php

require('../controllers/agentcontroller.php');

if(isset($_POST['updateAgent'])){

    $id = $_POST['agent_id'];
    $city = $_POST['agent_city'];
    $contact_number =  $_POST['agent_contact'];
  
    // $keywords = $_POST['keywords'];  
   

    // call the function
    $result = update_agent_controller($id, $city, $contact_number);

    echo json_encode($result);

    // if($result){
    //     header("Location: ../brands.php");
    // } else {
    //     echo "Update failed";
    // } 
}


?>