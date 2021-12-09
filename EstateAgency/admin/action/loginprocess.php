<?php
	require('../Database/core.php');
	require('../Controllers/admincontroller.php');

	if(isset($_POST['admin_login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

       // select customer details with this email
        $result = select_admin_givenEmail_controller($email);
		

		if (empty($result)){
			$_SESSION['error'] = 'Cannot find account with the email';
			$message = $_SESSION['error'];
			echo ("<script>alert('$message'); window.location.href = '../login.php';</script>");

			
		}
		else{
			if (password_verify($password, $result['password'])){
				$_SESSION['email'] = $result['email'];
			
                echo ("<script>alert('Login Successfully'); window.location.href = '../index.php';</script>");
				
			}
			else{
                $_SESSION['error'] = 'Incorrect password';
				$message = $_SESSION['error'];
				echo "<script>alert('$message');window.location.href = '../login.php';</script>";
			}
		}	

	}
	else{
		$_SESSION['error'] = 'Input customer credentials first';
        $message = $_SESSION['error'];
		echo ("<script>alert('$message'); window.location.href = '../login.php';</script>");
        
	}
	
?>

		