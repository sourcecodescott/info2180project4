<?php
	session_start();
 
	require_once('connection.php');

	$errmsg_arr = array();
 
	$errflag = false;

	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);

	if($username == 'admin' && $password =='password'){
			$_SESSION['SESS_ID'] = '000';
			$_SESSION['SESS_USERNAME'] = 'admin';
			$_SESSION['SESS_PASSWORD'] = 'password';
		header("location: admin.php");
		exit();
	}

	if($username == '') {
		$errmsg_arr[] = 'Username Missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}

	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	$qry="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result=mysql_query($qry);
 
	if($result) {
		if(mysql_num_rows($result) > 0) {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_ID'] = $member['ID'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_PASSWORD'] = $member['password'];
			session_write_close();
			header("location: profile.php");
			exit();
		}else {
			$errmsg_arr[] = 'Invaild username or password';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}

	?>