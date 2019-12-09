<?php
	require_once "core/init.php";
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
		<br>
		<br>
		
		<div class="container">
			<div class="row mt-5">
				<div class="col-5 offset-3">
					<?php
						if(isset($_GET['error'])){
					?>
						<div class="alert alert-danger" role="alert">
						  Ошибка при авторизации
						</div>
					<?php
						}
					?>
					<form action="to_login.php" method="post">
					  <div class="form-group">
					    <label>Почта</label>
					    <input type="email" class="form-control" placeholder="Почта" name="email">
					  </div>
					  <div class="form-group">
					    <label>Пароль</label>
					    <input type="password" class="form-control"placeholder="Пароль" name="password">
					  </div>
					  <button type="submit" class="btn btn-secondary">Войти</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>