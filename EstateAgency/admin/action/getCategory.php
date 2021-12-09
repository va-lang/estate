<?php 


require('../controllers/categorycontroller.php');




$data = select_all_categories_controller();


echo json_encode($data);



?>