<?php
session_start();
include("conn.php");


$titulo = $_POST['titulo']; 
$texto = $_POST['texto']; 



$imagens = $_FILES['imagens']['name'];

	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'publicacoes/';
		
	//Array com a extensões permitidas
	$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
	//Renomeiar
	$_UP['renomeia'] = true;
			
	//Array com os tipos de erros de upload do PHP
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
	$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
	//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
	if($_FILES['imagens']['error'] != 0){
		die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['imagens']['error']]);
		exit; //Para a execução do script
	}
			
	//Faz a verificação da extensao do arquivo
	$extensao = strtolower(end(explode('.', $_FILES['imagens']['name'])));
	if(array_search($extensao, $_UP['extensoes'])=== false){		
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
			<script type=\"text/javascript\">
				alert(\"A imagem não foi cadastrada extesão inválida.\");
			</script>			";
	}
			
	//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
	else{
		//Primeiro verifica se deve trocar o nome do arquivo
		if($_UP['renomeia'] == true){
			//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
			$nome_final = time().'.jpg';
			
		}else{
			//mantem o nome original do arquivo
			$nome_final = $_FILES['imagens']['name'];
		}
	//Verificar se é possivel mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['imagens']['tmp_name'], $_UP['pasta']. $nome_final)){
		//Upload efetuado com sucesso, exibe a mensagem
		$sql = "INSERT INTO site (titulo, postagens, imagens)
		VALUES ('$titulo','$texto','$nome_final')";

		if (mysqli_query($conn, $sql)) {
			$_SESSION['sucesso'] = "Publicação postada com sucesso!";  
	 		header('location:publicar.php');
		 } else {
	 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 }	

	
	}else{
		//Upload não efetuado com sucesso, exibe a mensagem
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
				<script type=\"text/javascript\">
					alert(\"Imagem não foi cadastrada com Sucesso.\");
				</script>";
			}
	}

mysqli_close($conn);

?>
