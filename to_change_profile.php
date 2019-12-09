<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "profile.php?error";

		if(isset($_POST['full_name'])){

			changeUser($_SESSION['USER_SESSION']['id'], $_POST['full_name']);
			$_SESSION['USER_SESSION']['full_name'] = $_POST['full_name'];
			$url = "profile.php?success";

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>