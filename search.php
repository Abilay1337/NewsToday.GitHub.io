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
		<div class="container mt-4">
			<?php

				$key = "";

				if(isset($_GET['key'])){
					$key = $_GET['key'];
				}
			?>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item active" aria-current="page">
			    	<h4>Результаты поиска : "<?php echo $key; ?>"</h4>
			    </li>
			  </ol>
			</nav>
			<?php		
				$blogs = searchBlogs($key);
				
				if($blogs!=null){

					foreach($blogs as $blog){

			?>
				<div class="jumbotron">
				  <h3><?php echo htmlspecialchars($blog['title']);?></h3>
				  <p><?php echo htmlspecialchars($blog['short_content']);?></p>
				  <hr class="my-4">
				  <p>
				  	Posted by: <b><?php echo htmlspecialchars($blog['full_name']); ?></b>
				  	At <?php echo htmlspecialchars($blog['post_date']);?>
				  </p>
				  <a class="btn btn-primary btn-sm" href="readmore.php?id=<?php echo $blog['id'];?>" role="button">Read more</a>
				</div>
			<?php
					}
				}
			?>
		</div>
	</body>
</html>