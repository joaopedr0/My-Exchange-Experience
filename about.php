<?php require_once("post_functions.php");

$about = <<<'EOD'
I'm João Pedro and I'm a 21 year old Computer Science student from Brazil. On my 3rd year of university I decided to study abroad for one semester, so I joined an exchange program on my university and I was selected to study at Kwantlen Polytechnic University for the Fall of 2018. I wanted to record all of my experiences and write about them, so I created this website as a project for one of the courses I'm taking. I hope this inspires some people to study abroad, as it is an incredible experience.
EOD;

include ("header.php") 
?>
<!DOCTYPE html>
<main>
	<br>
		<h2>About me</h2>
		<p><?php echo $about?><p>
</main>
<?php include ("footer.php") ?>