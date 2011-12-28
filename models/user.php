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
                    userid = :userid
                LIMIT 1");
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
				users
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
	function register( $name, $password, $email ){
		mysql_query(
			"INSERT INTO 
				user ( username, password, email, created )
            		VALUES
				( sanitize($name), sanitize($password), sanitize($email), NOW() )
			");
		if( mysql_affected_rows() != 1 ){
        	    return false;
		}
        	return array(
            		"id" => mysql_insert_id(),
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
=======
?>
>>>>>>> upstream/master
