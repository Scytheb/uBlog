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
?>