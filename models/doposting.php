<?php 
  $title = $_POST[ 'title' ];
	if( isset( $_POST[ 'title' ] ) ){
      
    }
	   $text = $_POST[ 'text' ];
	if( isset( $_POST[ 'text' ] ) ){
     
    }
/*
$title="sample";
$text="sampletext";*/
	mysql_query("
	INSERT INTO blog
	(posterid,title,stuff)
	VALUES (3,'$title','$text')
	");

?>