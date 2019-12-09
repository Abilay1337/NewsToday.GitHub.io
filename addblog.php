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
		<div class="container">
			<div class="row mt-5">
			<div class="col-12">
				<?php
					if(isset($_GET['error'])){
				?>
					<div class="alert alert-danger" role="alert">
					   Ошибка при добавлении блога
					</div>
				<?php
					}
				?>
				<?php
					if(isset($_GET['success'])){
				?>
					<div class="alert alert-success" role="alert">
					  Блог добавлен
					</div>
				<?php
					}
				?>
				<form action="to_addblog.php" method="post">
				  <div class="form-group">
				    <label>Заголовок</label>
				    <input type="text" class="form-control" placeholder="Заголовок" name="title">
				  </div>
				  <div class="form-group">
				    <label>Краткое описание</label>
				    <textarea class="form-control" name="short_content" rows="3" style="width: 100%;" placeholder="Краткое описание"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Полное содержание</label>
				    <textarea class="form-control" name="content" rows="10" style="width: 100%;" placeholder="Полное содержание"></textarea>
				  </div>
				  <button type="submit" class="btn btn-secondary">Добавить блог</button>
				</form>
			</div>
		</div>
		</div>
		<br>
		<br>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>