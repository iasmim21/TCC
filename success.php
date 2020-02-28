<?php
	session_start();
	include('conn.php');
	$cod=$_SESSION['id'];
	
	$userq=mysqli_query($conn,"select * from `cliente` where cod='$cod'");
	$userrow=mysqli_fetch_array($userq);
?>
<!doctype html>
<html>
<head>
	<title>Session Example</title>
</head>
<body>
	<h2>Usuário encontrado! </h2>
	Welcome, <?php echo $userrow['login']; ?>
</body>
</html>