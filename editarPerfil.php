<?php

session_start();
include('conn.php');

$cod = $_SESSION['id'];

$login = $_POST['loginEdit']; 
$nome = $_POST['nomeEdit']; 
$cpf = $_POST['cpfEdit'];
$telefone = $_POST['telefoneEdit'];
$email = $_POST['emailEdit'];
$senha = $_POST['senhaEdit'];

$estado = $_POST['estadoEdit'];
$cidade = $_POST['cidadeEdit'];
$bairro = $_POST['bairroEdit'];
$rua = $_POST['ruaEdit'];
$cep = $_POST['cepEdit'];
$n_casa = $_POST['n_casaEdit'];
$complemento = $_POST['complementoEdit'];


$resultUsu = "SELECT * FROM cliente WHERE cod = '".$cod."'";
$resultadoUsu = mysqli_query($conn, $resultUsu);
$linhaUsu = mysqli_num_rows($resultadoUsu);
$dadosUsu = mysqli_fetch_assoc($resultadoUsu);

if ($linhaUsu > 0) {

           
        $sql = "UPDATE cliente set nome = '$nome', cpf = '$cpf', telefone = '$telefone', senha='$senha', email='$email', login = '$login' WHERE cod = '$cod'";
		//echo $sql;
        $query = $conn->query($sql);
		if (!$query) {
			//echo "<script> alert('ocorreu um erro no cliente');</script>";
			$_SESSION['message']="Erro: Dados Pessoais";
		}
		$sqlEnd = "UPDATE endereco set rua = '$rua', estado = '$estado', cidade = '$cidade', bairro = '$bairro', cep = '$cep', n_casa = '$n_casa', complemento = '$complemento' WHERE cod = {$dadosUsu['endereco']}";
		//echo $sqlEnd;
        $queryE = $conn->query($sqlEnd);
		if (!$queryE) {
			//echo "<script> alert('ocorreu um erro no endereco');</script>";
			$_SESSION['message']="Erro: Não foi possível atualizar os dados de endereço   :(";
		}
		//echo "<script> alert('cliente alterado');</script>";
		//header("Location: perfil_usuario.php"); 
		$_SESSION['sucesso']="SUA CONTA FOI ATUALIZADA COM SUCESSO";
}
        echo "<script>window.location.href='perfil_usuario.php'</script>";




?>