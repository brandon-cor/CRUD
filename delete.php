<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
	$deleteID = $_GET['deleteid'];
	$query = "DELETE FROM `blogs` WHERE id = $deleteID";
	$result = mysqli_query($conn, $query);
	if ($result) {
		header('location:index.php');
	} else {
		die(mysqli_error($conn));
	}
}
