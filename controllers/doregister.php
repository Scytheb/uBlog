<?php
	global $settings;
<<<<<<< HEAD
    $settings = require( '../settings.php' );
	require_once "../models/db.php";
    require_once "../models/user.php";
	
=======
    $settings = require( "../settings.php");
	require "../models/db.php";
    require "../models/user.php";
>>>>>>> origin/master
	$is=register($_POST['username'], $_POST['password'], $_POST['email']);
	
?>