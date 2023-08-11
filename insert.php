<?php
session_start();
$title = $_POST['title'];
$description = $_POST['description'];
$blog = $_POST['blog'];

if (isset($_POST['submit']) && $_POST['randcheck'] == $_SESSION['rand']) {
	$InsertSQL = "INSERT INTO blogs (title, description, blog) VALUES ('$title', '$description', '$blog')";
	mysqli_query($conn, $InsertSQL);
}
