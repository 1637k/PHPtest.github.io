
<?php
session_start();
$conn = mysqli_connect("localhost","root","","manaegment");

if (mysqli_connect_error()) {
	echo "Failed to connect: " . mysqli_connect_error();
	exit();
}


$adminbaseurl = 'http://localhost/mangement/admin/';
 ?>