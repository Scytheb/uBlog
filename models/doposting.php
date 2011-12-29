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
	INSERT INTO post
	(title,text,posterid)
	VALUES ('$title','$text',3)");

?>