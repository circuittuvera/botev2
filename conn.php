<?php
	//$connection = new mysqli('localhost','boteacts-admin','VLc].jnUR~B]','boteacts_db') or die();
	// $connection = new mysqli('localhost','id12256582_bote','bote2020','id12256582_bote') or die();
  $connection = new mysqli('localhost','root','','boteacts_db') or die(mysqli_error());
// 

	// $connection = new mysqli("localhost","root","root","billing");

// Check connection
if ($connection -> connect_errno) {
  	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
