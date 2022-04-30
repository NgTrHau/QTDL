<?php

function is_administrator() {
	include '../partials/mysqli_connect.php';
	$username = $_SESSION['username'];
	$user =	"SELECT Adminn FROM account WHERE username='$username'";
	$result  = mysqli_query($dbc,$user);
	$row = mysqli_fetch_array($result);
	if($row['Adminn'] !=0) {
		
		return false;
	}
	else
		return true;
	//return (isset($_SESSION['username']) && ($_SESSION['username'] === $user));
}
