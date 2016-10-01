<?php 
	session_start();
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
include 'header.php';
?>

<?php 
	if(isset($_SESSION['id'])) {
		echo "<h1 id='velkommen1'>Velkommen til Simones loginsystem...</h1>";
}else {
	echo "<h1 id='velkommen'>Velkommen til Simones loginsystem...</h1><br><br><h3>Du er ikke logget ind.</h3>";
}

if(isset($_SESSION['id'])) {
			echo "<div id='detox'>Vil du tilbage til den hemmelige side? <br> <br><a href='secret.php'> Klik her!</a></div>";
		}	
?>
</body>
</html>