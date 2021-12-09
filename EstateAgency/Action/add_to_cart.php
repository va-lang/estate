<?php
require('../Controllers/cart_controller.php');
session_start();
$ip_add = getenv("REMOTE_ADDR");
if(isset($_GET["productid"])){
    $p_id = $_GET["productid"];
    $qty  = 1;
  //Checks if the user has logined
    if(isset($_SESSION['user_id'])){
        $c_id = $_SESSION['user_id'];
        
        $all_cart = getValidated_Controller($c_id, $p_id);
        //checks if product already exist in the cart
        if(!empty($all_cart)){
            echo ("<script>alert('Product already in the cart'); window.location.href = '../view/carthouse.php';</script>");
        }else{
            $result = add_to_cart_controller($p_id,$ip_add,$c_id, $qty);
            if($result){
               echo ("<script>alert('Product Successfully added!'); window.location.href = '../view/carthouse.php';</script>");
            }else{
                echo ("<script>alert('Product Not added'); window.location.href = '../view/carthouse.php';</script>");
            }
        }

    }else{
        $all_cart = select_one_cart_controller($p_id, $ip_add);
        
        //checks if product already exist in the cart
        if(!empty($all_cart)){
            echo ("<script>alert('Product already in the cart'); window.location.href = '../view/carthouse.php';</script>");
        }else{
            $result = add_to_cart_notLogin_controller($p_id,$ip_add, $qty);
            if($result){
                echo ("<script>alert('Product Successfully added!'); window.location.href = '../view/carthouse.php';</script>");
            }else{
                echo ("<script>alert('Product Not added!'); window.location.href = '../view/carthouse.php';</script>");
            }
        }
    } 

}



//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["user_id"])) {
		$session = $_SESSION["user_id"];
        $result = getCartItemQty_Login_controller($session);
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$result = getCartItemQty_controller($ip_add);
	}
	echo $result["count_item"];
}
?>