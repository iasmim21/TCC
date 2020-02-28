<?php
	session_start();
	include('conn.php');
	
	$email=$_POST['email'];
	$password=$_POST['password'];

	//$pass = md5($password);

	$sql= "select * from `cliente` where email='$email' && senha='$password'";
	echo $sql;
	$query = $conn->query($sql);
	$numrows = mysqli_num_rows($query);

	// Usuário não forneceu a senha ou o login 
	
	
	if ($numrows==0){
		$_SESSION['message']="Usuário não encontrado!";
		header('location:login_entrar.php');
	}else{
		if(!$email || !$password) { 

	    	$_SESSION['message'] = "Você deve digitar sua senha e login!";
	   		header('location:login_entrar.php'); 
	   	}else{
			$row=mysqli_fetch_array($query);
			$_SESSION['id']=$row['cod'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;

			if (isset($_GET['var'])) {
				header('location:carrinho.php');
			}else{
			header('location:index.php');
			}
		}
	}
?>

