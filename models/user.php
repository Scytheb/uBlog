<?php
	function getProfileDetails($userid) {
		if (!$userid) {
			return false;
        }
		$res = db(
                "SELECT
                    id, name, surname, location, email, occupation, interests, posts, website 
                FROM
                    user
                WHERE
                    userid = :username
                LIMIT 1");
        if(!mysql_num_rows($res)) {
                return false;
        }
        $row = mysql_fetch_array( $res );
			return $row;
	}
?>