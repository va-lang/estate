<?php
	require('../Database/core.php');
	require('../Controllers/customer_controller.php');

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

       // select customer details with this email
        $result = select_customer_givenEmail_controller($email);
		

		if (empty($result)){
			$_SESSION['error'] = 'Cannot find account with the email';
			$message = $_SESSION['error'];
			echo ("<script>alert('$message'); window.location.href = '../Login/login.php';</script>");

			
		}
		else{
			if (password_verify($password, $result['customer_pass'])){
				$_SESSION['user_id'] = $result['customer_id'];
				$_SESSION['user_role'] = $result['user_role'];
                $session = $_SESSION['user_id'];
				if (isset($_SESSION['ip_add'])){
					$ip_add = $_SESSION['ip_add'];
					updateCart_CID($session, $ip_add);
                    echo ("<script>alert('Login Successfully'); window.location.href = '../view/housecheckout.php';</script>");
					//header("Location: ../index.php");
				}
				else{
					//header("Location: ../index.php");
                    echo ("<script>alert('Login Successfully! Customer'); window.location.href = '../view/housecheckout.php';</script>");
				}
				
			}
			else{
                $_SESSION['error'] = 'Incorrect password';
				$message = $_SESSION['error'];
				echo "<script>alert('$message');window.location.href = '../Login/login.php';</script>";
			}
		}	

	}
	else{
		$_SESSION['error'] = 'Input customer credentials first';
        $message = $_SESSION['error'];
		echo ("<script>alert('$message'); window.location.href = '../login.php';</script>");
        
	}
	
?>

		