<?php
//A function that given the userid returns the details of the profile
//of the requested user
function getProfileDetails($userid) {
if (!$userid) {
return false;
        }
$res = mysql_query("
	SELECT * FROM user
	WHERE userid = $userid
	LIMIT 1
");
    if(!mysql_num_rows($res)) {
        return false;
    }
    $row = mysql_fetch_array( $res );
return $row;
}

//User login function
function login( $username, $password ){
$username=sanitize( $username );
$passwordHash=hash("sha1", sanitize( $password ) );

$res = mysql_query(
"SELECT
*
FROM
login
WHERE
username=$username
AND
password=$passwordHash
");
if( mysql_num_rows($res) == 0 ){
             return false;
        }
mysql_query(
"UPDATE
login
SET
enter = 1
WHERE
username = $username
");

         return mysql_fetch_array( $res );
}

//User registration function
function register( $name, $password, $email ){
$passwordHash = hash("sha1", sanitize( $password ) );
$insertToLogin = mysql_query(
"INSERT INTO
login ( username, password, email, created )
VALUES
( sanitize($name), $passwordHash, sanitize($email), NOW() )
");


$loginId = mysql_query(
"SELECT
loginid
FROM
login
WHERE
username = $name
");

$insertToUser = mysql_query(
"INSERT INTO
user ( loginid, email )
VALUES
( $loginId, sanitize($email) )
");

if( !$insertToLogin
|| !$insertToUser
|| !$loginId ){
         //If something went wrong, delete added records, just in case.
mysql_query(
"DELETE FROM
login
WHERE
loginid = $loginId
");

mysql_query(
"DELETE FROM
user
WHERE
loginid = $loginId
");

return false;
}
         return array(
//mysql_insert_id return last auto-incremented value from last query
//in this case, userid from table user
             "userid" => mysql_insert_id(),
             "username" => $name
         );
     }

//Sanitizes input to prevent SQl injections
function sanitize($input){
if( get_magic_quotes_gpc() ){
$input=stripslashes($input);
}

$input=mysql_real_escape_string($input);
return $input;
}
?>