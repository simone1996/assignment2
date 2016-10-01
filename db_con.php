<?php 
	session_start();
?>
<?php
$conn = mysqli_connect("simonet.dk.mysql", "simonet_dk", "12344321", "simonet_dk");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>