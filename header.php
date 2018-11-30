<?php 

?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<head>
    <title>My Exchange Experience</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
	<header>
		<div id="topnav">
			 <nav id="nav-bottom"> 
				
				<ul> 
					<li>
						<a id="home" class="a-home" href=".">
							<span>Home</span>
						</a>
					</li> 
					<li>
						<a id="university" class="a-university" href=".?action=university">
							<span>University</span>
						</a>
					</li> 
					<li>
						<a id="bars" class="a-bars" href=".?action=bars_and_restaurants">
							<span>Bars/Restaurants</span>
						</a>
					</li> 
					<li>
						<a id="hiking" class="a-hiking" href=".?action=hiking">
							<span>Hiking</span>
						</a>
					</li> 
					<li>
						<a id="shows" class="a-shows" href=".?action=shows">
							<span>Shows</span>
						</a>
					</li> 
					<li>
						<a id="about" class="a-about" href=".?action=about">
							<span>About me</span>
						</a>
					</li> 
				</ul> 
							
			</nav> 
		</div>
		
		<a href=".?action=new_post" class="float">
			<i class="fa fa-plus my-float"></i>
		</a>
		<div class="label-container">
			<div class="label-text">Make a new post</div>
			<i class="fa fa-play label-arrow"></i>
		</div>

	</header>
	
	<h1>My Exchange Experience</h1>
	
<script>
// Add active class to the current button (highlight it)
var div = document.getElementById("topnav");
var btns = div.getElementsByTagName("a");
function active() {
	var active = document.getElementById("<?php echo $_SESSION["active"] ?>");
	active.className += " active";
	var nav = document.getElementById("nav-bottom")
	if(active.id == "home"){
		nav.style.borderBottom = "8px solid #ff8400";
	} else if(active.id == "university"){
		nav.style.borderBottom = "8px solid #e42b2b";
	} else if(active.id == "bars"){
		nav.style.borderBottom = "8px solid #f4df42";
	} else if(active.id == "hiking"){
		nav.style.borderBottom = "8px solid #28cc4b";
	} else if(active.id == "shows"){
		nav.style.borderBottom = "8px solid #a800ff";
	} else if(active.id == "about"){
		nav.style.borderBottom = "8px solid #49a7f3";
	}
}
window.onload = active;
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>