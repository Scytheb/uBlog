<?php
    global $settings;
    $settings = require( "../settings.php");
	require "../models/db.php";
    require "../models/user.php";
	include "views/header.php";
		
		if (!isset($_POST['username'])||!isset($_POST['password'])||!isset($_POST['email'])) {
			include "views/register/view.php";
			include "views/footer.php";
		}
		else {
			register($_POST['username'], $_POST['password'], $_POST['email']);
			header('Location: globalblogs.php');
		}			
		
		
?>