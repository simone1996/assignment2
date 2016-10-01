<?php session_start();
include 'db_con.php';
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM user WHERE uname ='$uname'";
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);
if($hash == 0) {
	header("Location: index.php?error=fejl_i_brugernavn_eller_password");
	exit();
} else{
	$sql = "SELECT * FROM user WHERE uname='$uname' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn, $sql);
	if (!$row=mysqli_fetch_assoc($result)){
	echo "Dit brugernavn eller password er forkert!";
	}	else{ $_SESSION['id'] = $row['id'];}
	header("Location: secret.php"); 
}
?>