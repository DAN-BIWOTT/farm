<?php
	function Login($user_id)
	{
		$_SESSION['SBUser'] = $user_id;
		$date = date("Y-m-d H:i:s");
		global $db;
		$e = $db->query("UPDATE users SET last_login = '$date' WHERE id = '$user_id' ");
		$_SESSION['success_flash'] = "You have been logged in";
		header('Location: profile.php');
	}

	function Login2($user_id)
	{
		$_SESSION['SBUser'] = $user_id;
		$date = date("Y-m-d H:i:s");
		global $db;
		$e = $db->query("UPDATE users SET last_login = '$date' WHERE id = '$user_id' ");
		$_SESSION['success_flash'] = "You have been logged in";
		header('Location: profile2.php');
	}
?>