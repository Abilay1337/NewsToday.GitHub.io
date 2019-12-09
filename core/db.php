<?php
	
	$connection = new PDO('mysql:host=localhost;dbname=final_project','root','');


	function getUser($email){

		global $connection;

		$query = $connection->prepare("SELECT * FROM users WHERE email = :email");

		$query->execute(array("email"=>$email));
		$result = $query->fetch();

		return $result;

	}

	function addUser($email, $password, $fullName){

		global $connection;

		$query = $connection->prepare("
			INSERT INTO users (id, email, password, full_name) 
			VALUES (NULL, :email, :password, :full_name)
		");

		$query->execute(
			array(
				"email"=>$email, 
				"password"=>$password,
				"full_name"=>$fullName
			)
		);

	}

	function addBlog($userId, $title, $shortContent, $content){

		global $connection;

		$query = $connection->prepare("
			INSERT INTO blogs (id, user_id, title, short_content, content, post_date) 
			VALUES (NULL, :user_id, :title, :short_content, :content, NOW())
		");

		$query->execute(
			array(
				"user_id"=>$userId, 
				"title"=>$title,
				"short_content"=>$shortContent,
				"content"=>$content
			)
		);
		
	}

	function searchBlogs($key){

		global $connection;

		$query = $connection->prepare("
			SELECT b.id, b.user_id, b.title, b.short_content, b.post_date, u.full_name 
			FROM blogs b 
			LEFT OUTER JOIN users u ON u.id = b.user_id
			WHERE b.title LIKE :key OR b.content LIKE :key OR b.short_content LIKE :key
			ORDER BY b.post_date DESC
		");

		$query->execute(array("key"=>"%$key%"));

		$result = $query->fetchAll();

		return $result;

	}


	function getAllBlogs(){

		global $connection;

		$query = $connection->prepare("
			SELECT b.id, b.user_id, b.title, b.short_content, b.post_date, u.full_name 
			FROM blogs b 
			LEFT OUTER JOIN users u ON u.id = b.user_id
			ORDER BY b.post_date DESC
		");

		$query->execute();

		$result = $query->fetchAll();

		return $result;

	}

	function getBlogById($id){

		global $connection;

		$query = $connection->prepare("
			SELECT b.id, b.user_id, b.title, b.short_content, b.post_date, u.full_name, b.content
			FROM blogs b 
			LEFT OUTER JOIN users u ON u.id = b.user_id
			WHERE b.id = :id
		");

		$query->execute(array("id"=>$id));

		$result = $query->fetch();

		return $result;

	}

	function saveBlog($id, $userId, $title, $shortContent, $content){

		global $connection;

		$query = $connection->prepare("
			UPDATE blogs SET title = :title, 
			short_content = :short_content,
			content = :content
			WHERE id = :id AND user_id = :user_id
		");

		$query->execute(
			array(
				"user_id"=>$userId, 
				"title"=>$title,
				"short_content"=>$shortContent,
				"content"=>$content,
				"id"=>$id
			)
		);
		
	}

	function deleteBlog($id, $userId){

		global $connection;

		$query = $connection->prepare("
			DELETE FROM blogs WHERE id = :id AND user_id = :user_id
		");

		$query->execute(
			array(
				"user_id"=>$userId,
				"id"=>$id
			)
		);
		
	}

	function addComment($blogId, $userId, $comment){

		global $connection;

		$query = $connection->prepare("
			INSERT INTO comments (id, blog_id, user_id, comment, post_date)
			VALUES (NULL, :blog_id, :user_id, :comment, NOW())
		");

		$query->execute(
			array(
				"user_id"=>$userId, 
				"comment"=>$comment,
				"blog_id"=>$blogId
			)
		);
		
	}

	function changeUser($userId, $fullName){

		global $connection;

		$query = $connection->prepare("
			UPDATE users SET full_name = :full_name WHERE id = :user_id
		");

		$query->execute(array("user_id"=>$userId, "full_name"=>$fullName));

	}

	function getAllComments($blogId){

		global $connection;

		$query = $connection->prepare("
			SELECT c.id, c.blog_id, c.user_id, c.comment, c.post_date, 
			u.full_name 
			FROM comments c 
			LEFT OUTER JOIN users u ON u.id = c.user_id 
			WHERE c.blog_id = :blog_id 
			ORDER BY c.post_date DESC 
		");

		$query->execute(array("blog_id"=>$blogId));

		$result = $query->fetchAll();

		return $result;

	}

	function changePassword($userId, $newPassword){

		global $connection;

		$query = $connection->prepare("
			UPDATE users SET password = :password WHERE id = :user_id
		");

		$query->execute(array("user_id"=>$userId, "password"=>$newPassword));

	}
?>