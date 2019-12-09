<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "index.php";

		if(isset($_POST['blog_id'])&&isset($_POST['comment'])){

			addComment($_POST['blog_id'], $_SESSION['USER_SESSION']['id'], $_POST['comment']);

			$url = "readmore.php?id=".$_POST['blog_id'];

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>