<?php require_once("post_functions.php");

if($category == null){
	$posts = posts\retrieve_all();
} else {
	$posts = posts\retrieve_by_category($category);
}

include ("header.php") 
?>
<!DOCTYPE html>
<main>
	<br>
	<?php foreach ($posts as $post) : ?>
		<h2><?php echo $post["title"]?></h2>
		<p class="partialtext"><?php echo nl2br($post["content"])?><p>
		<a href="post.php?id=<?php echo $post["id"]?>">View full post</a>
    <?php endforeach; ?>
</main>
<?php include ("footer.php") ?>