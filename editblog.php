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
		<div class="container mt-4 pb-5 mb-5">
			<?php

				if(isset($_SESSION['USER_SESSION'])&&isset($_GET['id'])&&is_numeric($_GET['id'])){

					$blog = getBlogById($_GET['id']);

					if($blog!=null&&$blog['user_id']==$_SESSION['USER_SESSION']['id']){

			?>
				<form action="to_saveblog.php" method="post">
				  <input type="hidden" name="id" value="<?php echo $blog['id'];?>">
				  <div class="form-group">
				    <label>Title</label>
				    <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo htmlspecialchars($blog['title']);?>">
				  </div>
				  <div class="form-group">
				    <label>Short Content</label>
				    <textarea class="form-control" name="short_content" rows="3" style="width: 100%;" placeholder="Short Content"><?php echo htmlspecialchars($blog['short_content']);?></textarea>
				  </div>
				  <div class="form-group">
				    <label>Content</label>
				    <textarea class="form-control" name="content" rows="10" style="width: 100%;" placeholder="Content"><?php echo htmlspecialchars($blog['content']);?></textarea>
				  </div>
				  <button type="submit" class="btn btn-secondary" title="Сохранить блог"><i class="fas fa-save"></i></button>
				</form>
				<br>
				<form action="to_deleteblog.php" method="post">
					<input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
					<button class="btn btn-secondary" title="Удалить блог"><i class="fas fa-trash"></i></button>
				</form>
			<?php

					}else{

						echo "<h1>ACCESS DENIED</h1>";

					}

				}else{

					echo "<h1>404 PAGE NOT FOUND</h1>";

				}

			?>
		</div>
	</body>
</html>