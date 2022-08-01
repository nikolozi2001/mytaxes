<?php 
    $allowedLanguages = Array("ka", "en");
	$language = "ka";

	if(isset($_GET["lang"]) && in_array($_GET['lang'], $allowedLanguages)){
		$language = $_GET["lang"];
		setcookie("lang", $_GET["lang"], time()+3600 * 24 * 365 * 2);
	}
    else if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $allowedLanguages)){
		$language = $_COOKIE['lang'];
	}

    require_once "language/" . $language . ".php";
 ?>