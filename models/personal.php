<?php
	//GET USERID HERE 
	//example id=3
	$id=2;
	$x=0;
	$y=$x+2;
	$result=mysql_query("
	SELECT * FROM blog
	WHERE userid=$id;
	");
	if(!$result) die(mysql_error());
?>