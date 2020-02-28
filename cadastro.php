<?php
session_start();
include("conn.php");


$login = $_POST['login']; 
$nome = $_POST['username']; 
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['password'];

$codSexo = $_POST['sexo'];

$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$casa = $_POST['casa'];
$complemento = $_POST['complemento'];


$insere_end = "INSERT INTO endereco (rua, cidade, n_casa, bairro, complemento, estado, cep)
VALUES ('$rua','$cidade','$casa','$bairro','$complemento','$estado', '$cep')";

//echo $insere_end;

$query = mysqli_query($conn, $insere_end);
if ($query) {

	$codEndereco = mysqli_insert_id($conn);

	$sql = "INSERT INTO cliente (email, nome, cpf, telefone, login, senha, endereco, sexo)
	VALUES ('$email', '$nome', '$cpf', '$telefone', '$login','$senha','$codEndereco', '$codSexo')";
	echo "<br>";
//echo $sql;

	if (mysqli_query($conn, $sql)) {
	   $_SESSION['sucesso'] = "Conta criada com sucesso!";
		header('location:login_entrar.php');
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);

?>
