<?php
//A function that given the userid returns the details of the profile
//of the requested user
function getProfileDetails($userid) {
if (!$userid) {
return false;
        }
$res = mysql_query(
                "SELECT
*
FROM
user
WHERE
userid = $userid
LIMIT 1");
        if(!mysql_num_rows($res)) {
                return false;
        }
        $row = mysql_fetch_array( $res );
return $row;
}

//User login function returns details of the user login info
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
         return mysql_fetch_array( $res );
}

//User registration function
function register( $username, $password, $email ) {
mysql_query(
"INSERT INTO
login (username, password, email, created, enter)
VALUES
('sanitize($username)', 'sanitize($password)', 'sanitize($email)', 'NOW()', '1')
");
if( mysql_affected_rows() != 1 ){
         return false;
}
         return
array(
             "id" => mysql_insert_id(),
             "username" => $username
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

