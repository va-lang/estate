<?php

require('../controllers/agentcontroller.php');


if(isset($_POST['deleteAgent'])){

   $id = $_POST['agent_id'];

    // call the function
    $result = delete_agent_controller($id);

    echo json_encode($result);
}


?>