<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){

		$url = "editblog.php?error";

		if(isset($_POST['id'])&&isset($_POST['title'])&&isset($_POST['short_content'])&&isset($_POST['content'])){

			saveBlog($_POST['id'], $_SESSION['USER_SESSION']['id'], $_POST['title'],$_POST['short_content'], $_POST['content']);

			$url = "readmore.php?id=".$_POST['id'];

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>