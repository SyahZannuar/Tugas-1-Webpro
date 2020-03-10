<?php

$conn = mysqli_connect('localhost', 'root', '','vietnam');
if (!$conn) {
	echo "database error";
}