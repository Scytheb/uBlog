<?php
	global $settings;
    $settings = require( 'settings.php' );
	require_once "models/db.php";
    require_once "models/user.php";
    //$user = getCurrentUser();
    //$page = 'register';
	$page = $_POST[ 'page' ];
 if( !isset( $_POST[ 'page' ] ) ){
       die("error");   
    }
    /*
    if( $user == false && !in_array( $page, array( 'login', 'register', 'dologin', 'doregister' ) ) ){
        header( 'Location: ./?page=login' );
        exit();
    }
    $whitelist = array( 'posts', 'post', 'dopost', 'docomment', 'login', 'register', 'dologin', 'doregister' );
    if( !in_array( $page, $whitelist ) ){
        die( "Could not find page $page." );
    }*/
    
	require "models/{$page}.php";
?>