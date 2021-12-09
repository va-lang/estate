<?php 


require('../controllers/agentcontroller.php');




$data = select_all_agents_controller();


echo json_encode($data);



?>