<?php require_once("post_functions.php");
require_once("image_functions.php");

session_start();

$id = filter_input(INPUT_GET, "id");
$post = posts\retrieve_post($id);
$images = images\retrieve_images($post["title"]);
$count = 0;

include ("header.php") 
?>
<!DOCTYPE html>
<main>
	<br>
		<label><a href="javascript:history.go(-1)">Go back</a></label>
		<h2><?php echo $post["title"]?></h2>
		
		<!-- Images used to open the lightbox -->
		<?php if ($count == 0) { ?>
			<div class="row">
			<?php  } ?>
			<?php foreach ($images as $image) : ?>
				<div class="column">
					<img src="<?php echo $image ?>" onclick="openModal();currentSlide(<?php echo $count + 1?>)" class="hover-shadow">
				</div>
				<?php $count++;?>
				<?php if ($count % 4 == 0) { ?>
					</div>
					<div class="row">
					<?php $count = 0;?>
				<?php  } ?>
		<?php endforeach; ?>

		<!-- The Modal/Lightbox -->
		<div id="myModal" class="modal">
			<span class="close cursor" onclick="closeModal()">&times;</span>
			<div class="modal-content">
			<?php $count = 1;?>
				<?php foreach ($images as $image) : ?>
				<div class="mySlides">
					<div class="numbertext"><?php echo $count;?> / <?php echo sizeof($images);?></div>
					<img src="<?php echo $image ?>" style="width:100%">
					<?php $count++;?>
				</div>
				<?php endforeach; ?>
				<!-- Next/previous controls -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
		</div>

</main>
<?php include ("footer.php") ?>

<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>