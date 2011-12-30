<?php
	global $settings;
    $settings = require( '../settings.php' );
	require_once "../models/db.php";
    require_once "../models/user.php";
	
	$is=register($_POST['username'], $_POST['password'], $_POST['email']);
	
?>