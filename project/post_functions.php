<?php
namespace posts{
	require_once("database.php");

	function retrieve_all(){
		global $db;
		$query = "SELECT * FROM post
					ORDER BY date desc";
		$statement = $db->prepare($query);
		$statement->execute();
		$posts = $statement->fetchAll();
		$statement->closeCursor();
		return $posts;
	}
	
	function retrieve_by_category($category){
		global $db;
		$category_q = $db->quote($category);
		$query = "SELECT * FROM post
					WHERE category = $category_q
					ORDER BY date desc";
		$statement = $db->prepare($query);
		$statement->execute();
		$posts = $statement->fetchAll();
		$statement->closeCursor();
		return $posts;
	}
	
	function retrieve_post($id){
		global $db;
		$id_q = $db->quote($id);
		$query = "SELECT * FROM post
					WHERE id = $id_q";
		$statement = $db->prepare($query);
		$statement->execute();
		$post = $statement->fetch();
		$statement->closeCursor();
		return $post;
	}
	
	function create_post($title, $category, $content){
		global $db;
		$title_q = $db->quote($title);
		$category_q = $db->quote($category);
		$content_q = $db->quote($content);
		$query = "INSERT INTO post (title, category, content)
					VALUES ($title_q, $category_q, $content_q)";
		$statement = $db->prepare($query);
		$statement->execute();
		$statement->closeCursor();
	}
			
}
?>