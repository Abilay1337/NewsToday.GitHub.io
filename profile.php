<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php
			require_once "core/head.php";
		?>
		
	</head>
	<body>
		<?php
			require_once "core/navbar.php";
		?>
		<div class="container mb-5 pb-5">
			<div class="row mt-5">
				<div class="col-6 offset-3">
					<?php
						if(isset($_GET['error'])){
					?>
						<div class="alert alert-danger" role="alert">
						 Ошибка при обновлении профиля
						</div>
					<?php
						}
					?>
					<?php
						if(isset($_GET['success'])){
					?>
						<div class="alert alert-success" role="alert">
						  Профиль сохранен
						</div>
					<?php
						}
					?>
					<form action="to_change_profile.php" method="post">
					  <div class="form-group">
					    <label>Почта</label>
					    <input type="email" class="form-control" readonly value="<?php echo $_SESSION['USER_SESSION']['email']; ?>">
					  </div>
					  <div class="form-group">
					    <label>Имя Фамиля</label>
					    <input type="text" class="form-control"placeholder="Имя Фамиля" name="full_name" value = "<?php echo $_SESSION['USER_SESSION']['full_name']; ?>">
					  </div>
					  <button type="submit" class="btn btn-secondary">Изменить профиль</button>
					</form>
					<br><br>
					<form action="to_change_password.php" method="post">
						<div class="form-group">
						    <label>Старый пароль</label>
						    <input type="password" class="form-control"placeholder="Старый пароль" name="old_password">
						</div>
						<div class="form-group">
						    <label>Новый пароль</label>
						    <input type="password" class="form-control"placeholder="Новый пароль" name="new_password">
					  	</div>
					    <div class="form-group">
						    <label>Подтвердите новый пароль</label>
						    <input type="password" class="form-control"placeholder="Подтвердите новый пароль" name="re_new_password">
					  	</div>
					  	<button type="submit" class="btn btn-secondary">Изменить пароль</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>