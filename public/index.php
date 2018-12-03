<?php  

// front controller

$url = $_SERVER["REQUEST_URI"];

if($url == '/') {
	require '../index.php';
} 
elseif($url == '/addTask') {
	require '../create.php';
} 
else {
	echo "404 error";
}

?>