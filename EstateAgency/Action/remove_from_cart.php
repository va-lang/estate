<?php

require('../Controllers/cart_controller.php');
session_start();
$ip_address = $ip_add = getenv("REMOTE_ADDR");
if (isset($_GET['removeProd_ID'])){
    $p_id = $_GET['removeProd_ID'];
    if (isset($_SESSION["user_id"])){
        $session = $_SESSION["user_id"];
        $result = remove_carts_controller($p_id,$session);

        if($result){
            echo ("<script>alert('Product Successfully removed!'); window.location.href = '../view/carthouse.php';</script>");
         }else{
             echo ("<script>alert('Product Not removed'); window.location.href = '../view/carthouse.php';</script>");
         }

    }else{
        $result = remove_cart_controller($p_id,$ip_add);

        if($result){
            echo ("<script>alert('Product Successfully removed!'); window.location.href = '../View/carthouse.php';</script>");
         }else{
             echo ("<script>alert('Product Not removed'); window.location.href = '../view/carthouse.php';</script>");
         }

    }
}



?>