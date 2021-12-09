<?php 


require('../controllers/customer_controller.php');




$data = select_all_customers_controller();


echo json_encode($data);



?>