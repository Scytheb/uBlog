<?php
	//A function that takes the number of results requested (smallest and biggest) and the
	//way they are sorted (asc or desc) and returns all the information of the blogs
	function allBlogPosts($ground, $ceiling, $sort, $sortStyle='DESC') {
		if (!$ground||!$ceiling||!$sort) {
			return false;
        }
		$res = mysql_query(
                "SELECT
					* 
                FROM
                    blog
                ORDER BY
					$sort $sortStyle
                LIMIT $ground, $ceiling ");
        if(!mysql_num_rows($res)) {
			return false;
        }
		$i=0;
		$blog=array();
        while ($row = mysql_fetch_array($res)) {
			$blog[i]=$row;
			$i+=1;
		}
		return $blog;
	}
	
	//A function that takes the userid and the number of results results requested (smallest and biggest) and the
	//way they are sorted (asc or desc) and returns all the information of the blogs from this user
	function userBlogPosts($userid, $ground, $ceiling, $sort, $sortStyle='DESC') {
		if (!$ground||!$ceiling||!$sort||) {
			return false;
        }
		$res = mysql_query(
               "SELECT
					* 
                FROM
                    blog
				WHERE
					userid=:userid
                ORDER BY
					$sort $sortStyle
                LIMIT $ground, $ceiling ");
        if(!mysql_num_rows($res)) {
			return false;
        }
		$i=0;
		$userblog=array();
        while ($row = mysql_fetch_array($res)) {
			$userblog[i]=$row;
			$i+=1;
		}
		return $userblog;
	}