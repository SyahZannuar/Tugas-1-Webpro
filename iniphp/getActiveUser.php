<?php
include 'connection.php';
header('Content-Type: application/json');
session_start();
$username = $_SESSION['username'];
$iniquerry = mysqli_query($conn,"SELECT * FROM `profile` WHERE `username`='$username'");
foreach ($iniquerry as $val) {
	$data = json_encode($val);
}
echo $data;