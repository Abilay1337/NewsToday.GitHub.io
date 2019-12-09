<?php
	
	require_once "core/init.php";

	$url = "login.php?error";
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['email'])&&isset($_POST['password'])){

			$user = getUser($_POST['email']);

			if($user!=null&&$user['password']===$_POST['password']){

				$_SESSION['USER_SESSION'] = $user;
				$url = "index.php";
			
			}

		}

	}

	header("Location:$url");
?>