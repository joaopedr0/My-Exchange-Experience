<?php
namespace images{
	require_once("database.php");
	
	$image_dir_path = "images" . DIRECTORY_SEPARATOR;

	function upload_new_images($title){
		global $image_dir_path;
		$folder = $image_dir_path . $title;
		if (!file_exists($folder)) {
			mkdir($folder, 0777, true);
		}
		if (isset($_FILES["images"])) {
			$count = 0;
			foreach ($_FILES["images"]["name"] as $image){
				if (empty($image)) {
					return;
				}
				$source = $_FILES["images"]["tmp_name"][$count];
				$target = $image_dir_path . $title . DIRECTORY_SEPARATOR . $image;
				echo $source;
				move_uploaded_file($source, $target);
				$count++;
			}
		}
	}
	
	function retrieve_first_three($title){
		global $image_dir_path;
		$path = $image_dir_path . $title . DIRECTORY_SEPARATOR;
		$images = glob($path."*.{jpg,JPG,png,PNG,jpeg,JPEG}", GLOB_BRACE);
		if(sizeof($images) > 2){
			$images = array_slice($images, 0, 3);
		}
		return $images;
	}
	
	function retrieve_images($title){
		global $image_dir_path;
		$path = $image_dir_path . $title . DIRECTORY_SEPARATOR;
		$images = glob($path."*.{jpg,JPG,png,PNG,jpeg,JPEG}", GLOB_BRACE);
		return $images;
	}
			
}
?>