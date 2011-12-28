<?php
	
	require_once('models/user.php');
	//require_once('models/login.php');
	global $user
	//$login=doLogin($username, $password)
	//$userid=$login['id'];
	
	$user = getProfileDetails($userid);
	
	include('views/header.php');
	include('views/profile/view.php');
	include('views/footer.php');

?>