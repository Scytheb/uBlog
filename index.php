<?php
require_once "models/db.php";
/*
User management here
*/
/*  if( !isset( $_POST[ 'page' ] ) ){
       die("error");   
	 $page = $_POST[ 'page' ];
    }*/
	$page='posting';
	if($page=="posting") require "models/doposting.php";
?>