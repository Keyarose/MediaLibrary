<?php
	if(isset($_COOKIE['user_id']))
	{
		$userID = $_COOKIE['user_id'];
		$userSql = "SELECT mature FROM users WHERE user_id='$userID'";
		$userQuery = mysqli_query($dbc, $userSql);
		$matureVis = mysqli_fetch_array($userQuery)[0];
	}
	else
	{
		$matureVis = 0;
		$userID = 0;
	}
	
	if(isset($_COOKIE['permission']))
	{
		$permission = $_COOKIE['permission'];
	}
	
	if(isset($_COOKIE['user']))
	{
		$user = $_COOKIE['user'];
	}
?>