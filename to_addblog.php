<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "addblog.php?error";

		if(isset($_POST['title'])&&isset($_POST['short_content'])&&isset($_POST['content'])){

			addBlog($_SESSION['USER_SESSION']['id'], $_POST['title'],$_POST['short_content'], $_POST['content']);

			$url = "addblog.php?success";

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>