<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "profile.php?error";

		if(isset($_POST['old_password'])&&isset($_POST['new_password'])&&isset($_POST['re_new_password'])){

			if($_SESSION['USER_SESSION']['password']===$_POST['old_password']&&$_POST['new_password']===$_POST['re_new_password']){

				changePassword($_SESSION['USER_SESSION']['id'], $_POST['new_password']);

				$_SESSION['USER_SESSION']['password'] = $_POST['new_password'];
				$url = "profile.php?success";

			}

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>