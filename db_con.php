<?php 
	session_start();
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "loginsystem");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>
