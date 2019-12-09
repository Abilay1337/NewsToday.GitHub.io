<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "readmore.php?error";

		if(isset($_POST['id'])){

			deleteComment($_POST['id'], $_SESSION['USER_SESSION']['id']);

			$url = "index.php";

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>