<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "editblog.php?error";

		if(isset($_POST['id'])){

			deleteBlog($_POST['id'], $_SESSION['USER_SESSION']['id']);

			$url = "index.php";

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>