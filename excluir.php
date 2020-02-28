<?php
session_start();
require_once('conn.php');
$cod = $_SESSION['id'];
$sql = "DELETE cliente.*, endereco.* FROM cliente, endereco where cliente.cod = '$cod' AND endereco.cod = '$cod'";
$query = $conn->query($sql)or die($conn->error);

if(!$query){
	echo "<script>alert('erro!')</script>";
}else{
	//echo "<script>alert('Excluido com sucesso!')</script>";
	//echo "<script>window.location.href='index.php'</script>";
	$_SESSION['message'] = "Usuário excluído com sucesso!";
   	header('location:login_entrar.php');
}
?>