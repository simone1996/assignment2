<?php 
	session_start();
?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>Simones loginsystem</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
<body>
	<nav>
    	<ul> 
        	<li><a href="index.php">HOME</a></li>
            <?php 
			 
		if(isset($_SESSION['id'])) {
			echo "<form action='logout.php'>
		<button>LOG OUT</button>
		</form>";
		}	else {
			echo "<form action='login.php' method='post'>
			<input type='text' name='uname' placeholder='Brugernavn'> 
			<input type='password' name='pwd' placeholder='Password'>  
			<button type='submit'>LOG IN</button></form>";
		}
				
			?>
            <li><a href="signup_if.php">SIGN UP</a></li>
        </ul>
    </nav>
</header>
</body>