<?php 
session_start();
include('conn.php');
if (isset($_POST['ok'])) {
	$email = $_POST['email'];
	$erro = 0;

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$erro ++;
		$_SESSION['message']= "Email inválido";
		header('location:esqueceu_senha.php');

	}

	$sql_code = "SELECT senha FROM cliente WHERE email = '$email'";
	$sql_query = mysqli_query($conn, $sql_code) or die ($mysqli->error);
	$dado = $sql_query->fetch_assoc();
	$total = $sql_query->num_rows;

	if ($total == 0) {
		$erro++;
		$_SESSION['message']="O email informado não existe!";
		header('location:esqueceu_senha.php');
	}



	if ($erro == 0 && $total>0) {


		$novasenha = substr(md5(time()), 0, 6);
		$nscriptografada = md5(md5($novasenha));

		//if (mail($email, "Sua nova senha", "Sua nova seja é: ".$novasenha)) { //enviar email, precisa ver a hospedagem do site
			$sql_code = "UPDATE cliente SET senha = '$nscriptografada' WHERE  email = '$email'";
			$sql_query = mysqli_query($conn, $sql_code) or die ($mysqli->error);
		//}

		$_SESSION['message']="Sucesso!";
		header('location:esqueceu_senha.php');


	}

	
}











 ?>