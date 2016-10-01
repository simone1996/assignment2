<?php 
	session_start();
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
include 'header.php';
?>

<?php 
	
	$url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 	
	if (strpos($url, 'error=empty') !== false){
	echo "<h6>Udfyld alle felter!</h6>";
	}
	elseif (strpos($url, 'error=username') !== false){
		echo "<h6>Brugernavn eksisterer allerede!</h6>";
	}	
	
	
	if(isset($_SESSION['id'])) {
	echo "<h4>Du er allerede logget ind!</h4>";
}else {
	echo "<form id='test' action='signup.php' method='post'>
	<input type='text' name='first' placeholder='Fornavn'> <br>
    <input type='text' name='last' placeholder='Efternavn'> <br>
    <input type='email' name='email' placeholder='Email'> <br>
    <input type='text' name='uname' placeholder='Brugernavn'> <br>
    <input type='password' name='pwd' placeholder='Password'> <br>
    <button type='submit'>SIGN UP</button>
</form>";
}
?>

<?php 
	if(isset($_SESSION['id'])) {
	echo "<h5>Nu skal du ikke prøve at logge ind to gange ;-)</h5>";
}else {
	echo "<p>Du er ikke logget ind!</p>";
}
?>




	
</body>
</html>