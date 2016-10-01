<?php 
	session_start();

include 'db_con.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];


if (empty($first)) {
	header("Location: signup_if.php?error=empty");
	exit();
}
if (empty($last)) {
	header("Location: signup_if.php?error=empty");
	exit();
}
if (empty($email)) {
	header("Location: signup_if.php?error=empty");
	exit();
} 
if (empty($uname)) {
	header("Location: signup_if.php?error=empty");
	exit();
}
if (empty($pwd)) {
	header("Location: signup_if.php?error=empty");
	exit();
}
else {
		$sql = "SELECT uname FROM user WHERE uname='$uname'";
		$result = mysqli_query($conn, $sql);
		$unamecheck = mysqli_num_rows($result);
		if($unamecheck >0) {
			header("Location: signup_if.php?error=username");
			exit();					
	}	else {
		$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
	 $sql = "INSERT INTO user (first, last, email, uname, pwd) 
	 VALUES ('$first', '$last', '$email', '$uname', '$encrypted_password')";
		$result = mysqli_query($conn, $sql);
		header("Location: secret.php"); 
		}		
}
?>

