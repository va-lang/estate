<?php 


require('../controllers/brandcontroller.php');




$data = select_all_brands_controller();


echo json_encode($data);



?>