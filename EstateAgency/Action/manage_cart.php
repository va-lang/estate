<?php

require('../Controllers/cart_controller.php');

session_start();
$ip_add = getenv("REMOTE_ADDR");

if (isset($_POST['update_cart'])){
    $prod_id = $_POST['p_id'];
    $qty = $_POST['qty'];

    if (isset($_SESSION['user_id'])){
        $session = $_SESSION['user_id'];
        $result = updateCartQty_Logged($qty, $prod_id, $session);

        if($result){
            echo ("<script>alert('Cart Successfully updated!'); window.location.href = '../view/cart.php';</script>");
        }else{
            echo ("<script>alert('Cart Successfully removed!'); window.location.href = '../view/updateCart.php';</script>");
        }
    }else{
        $result = updateCartQty($qty, $prod_id, $ip_add);

        if($result){
            echo ("<script>alert('Cart Successfully updated!'); window.location.href = '../view/cart.php';</script>");
        }else{
            echo ("<script>alert('Cart Successfully removed!'); window.location.href = '../view/updateCart.php';</script>");
        }
    }
   
}


?>