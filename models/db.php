<?php
    session_start();
    mysql_connect('localhost','root','6058') or die( mysql_error() );
    mysql_select_db('ublog') or die( mysql_error() );
?>
