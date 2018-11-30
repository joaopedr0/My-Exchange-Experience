<?php require_once("post_functions.php");

include ("header.php") 
?>
<!DOCTYPE html>
<main>
	<br>
	<label>Title</label><br>
	<form action="." method="post" enctype="multipart/form-data">
		<input type="text" name="title" placeholder="Title" class="hintTextbox"><br>
		<label>Category</label><br>
		<select name="category">
			<option value="university">University</option>
			<option value="bars_and_restaurants">Bars/Restaurants</option>
			<option value="hiking">Hiking</option>
			<option value="shows">Shows</option>
		</select><br>
		<label>Write post:</label><br>
		<textarea name="content" rows="10" cols="80"></textarea>
		<input type="hidden" name="action" value="publish">
		<input type="file" multiple="multiple" name="images[]"><br>
		<br>
		<input id="post" type="submit" value="Publish post">
	
	</form>
	
	
</main>
<?php include ("footer.php") ?>