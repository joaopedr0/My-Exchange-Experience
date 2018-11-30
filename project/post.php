<?php require_once("post_functions.php");
require_once("image_functions.php");

session_start();

$id = filter_input(INPUT_GET, "id");
$post = posts\retrieve_post($id);
$images = images\retrieve_first_three($post["title"]);

include ("header.php") 
?>
<!DOCTYPE html>
<main>
	<br>
		<label><a href="javascript:history.go(-1)">Go back</a><a href="" style="float:right; padding-right:10em;">Edit post</a></label>
		<h2><?php echo $post["title"]?></h2>
		<p><?php echo nl2br($post["content"])?><p><br>
		<div class="row">
			<?php foreach ($images as $image) : ?>
				<div class="column">
					<img src="<?php echo $image?>" alt="<?php echo $post["title"]?>" style="width:100%">
				</div>
			<?php endforeach; ?>
		</div>
		<a href="images.php?id=<?php echo $post["id"]?>" style="padding-left:4em">View all images</a>
</main>
<?php include ("footer.php") ?>