<?php
$connect = mysqli_connect("localhost", "root", "", "quiz_system");
if (!$connect) {
	echo "cann't connect";
	echo mysqli_connect_error();
	exit;
}
