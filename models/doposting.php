<?php 
/*
	if( isset( $_GET[ 'title' ] ) ){
        $title = $_GET[ 'title' ];
    }
	if( isset( $_GET[ 'text' ] ) ){
        $text = $_GET[ 'text' ];
    }
*/
$title="sample";
$text="sampletext";
	mysql_query("
	INSERT INTO post
	(title,text,posterid)
	VALUES ('$title','$text',3)");

?>