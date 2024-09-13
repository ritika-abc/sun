

<?php
include "config.php";

//include'function.php';

// slder delete function

	$id = $_GET['id'];
	$query = "DELETE FROM `blog` WHERE `id`= '$id'";
	$delte_query = mysqli_query($con, $query);
	if ($delte_query) {
		header('location:insert.php');
	}
?>
