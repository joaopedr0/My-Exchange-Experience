<?php
require_once("database.php");
require_once("post_functions.php");
require_once("image_functions.php");

// Get the action to perform
$action = filter_input(INPUT_POST, "action");
if ($action === NULL) {
    $action = filter_input(INPUT_GET, "action");
    if ($action === NULL) {
        $action = "home";
    }
}

session_start();

switch($action) {
    case "home":
		$category = null;
		$_SESSION["active"] = "home";
        include("home.php");
        break;
	case "university":
		$category = "university";
		$_SESSION["active"] = "university";
        include("home.php");
        break;
    case "bars_and_restaurants":
        $category = "bars_and_restaurants";
		$_SESSION["active"] = "bars";
        include("home.php");
        break;
	case "hiking":
        $category = "hiking";
		$_SESSION["active"] = "hiking";
        include("home.php");
        break;
	case "shows":
        $category = "shows";
		$_SESSION["active"] = "shows";
        include("home.php");
        break;
    case "about":
		$_SESSION["active"] = "about";
        include("about.php");
        break;
	case "new_post":
		include("new_post.php");
		break;
	case "publish":
		$title = filter_input(INPUT_POST, "title");
		$category = filter_input(INPUT_POST, "category");
		$content = filter_input(INPUT_POST, "content");
		images\upload_new_images($title);
		posts\create_post($title, $category, $content);
		$category = null;
		$action = "home";
		include("home.php");
		break;
}
?>