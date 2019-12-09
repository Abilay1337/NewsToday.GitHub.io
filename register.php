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
						  Error on registration
						</div>
					<?php
						}
					?>
					<?php
						if(isset($_GET['success'])){
					?>
						<div class="alert alert-success" role="alert">
						  Registration Completed
						</div>
					<?php
						}
					?>
					<form action="to_register.php" method="post">
					  <div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control" placeholder="Email" name="email">
					  </div>
					  <div class="form-group">
					    <label>Password</label>
					    <input type="password" class="form-control"placeholder="Password" name="password">
					  </div>
					  <div class="form-group">
					    <label>Confirm Password</label>
					    <input type="password" class="form-control"placeholder="Confirm Password" name="re_password">
					  </div>
					  <div class="form-group">
					    <label>Full Name</label>
					    <input type="text" class="form-control"placeholder="Full Name" name="full_name">
					  </div>
					  <button type="submit" class="btn btn-primary">Sign Up</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>