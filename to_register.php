<?php
	
	require_once "core/init.php";

	$uri = "?error";
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['re_password'])&&isset($_POST['full_name'])){

			if($_POST['password']===$_POST['re_password']){

				$found = getUser($_POST['email']);

				if($found==null){

					addUser($_POST['email'], $_POST['password'], $_POST['full_name']);
					$uri = "?success";

				}

			}

		}

	}

	header("Location:register.php$uri");
?>