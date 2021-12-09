<?php 


require('../controllers/productcontroller.php');


$data = getOrder();


echo json_encode($data);

?>