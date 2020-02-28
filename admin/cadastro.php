<?php
session_start();
include("conn.php");


$categoria = $_POST['categoria']; 
$nome = $_POST['nome']; 
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$peso = $_POST['peso'];




//loop para ler as imagens
    for ($i = 0; $i < 3; $i++){ 
    	$imagens = $_FILES['imagens']['name'][$i];

	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'produtos/';
		
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
	if($_FILES['imagens']['error'][$i] != 0){
		die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['imagens']['error'][$i]]);
		exit; //Para a execução do script
	}
			
	//Faz a verificação da extensao do arquivo
	$extensao = strtolower(end(explode('.', $_FILES['imagens']['name'][$i])));
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
			$nome_final[] = rand().'.jpg';
			
		}else{
			//mantem o nome original do arquivo
			$nome_final[] = $_FILES['imagens']['name'][$i];
		}


	//Verificar se é possivel mover o arquivo para a pasta escolhida
	move_uploaded_file($_FILES['imagens']['tmp_name'][$i], $_UP['pasta']. $nome_final[$i]);
	// 	//Upload efetuado com sucesso, exibe a mensagem
		
	// 	$sql = "INSERT INTO produto (categoria, nome, preco, descricao, imagens, quantidade)
	// 	VALUES ('$categoria','$nome','$valor','$descricao','$nome_final','$quantidade')";

	 
}
} //end for

	$final= implode(',', $nome_final); //transforma o arrey em uma string
	$sql = "INSERT INTO produto (categoria, nome, preco, descricao, imagens, quantidade, peso)
 	VALUES ('$categoria','$nome','$valor','$descricao','$final','$quantidade', '$peso')";



		if (mysqli_query($conn, $sql)) {
			$_SESSION['sucesso'] = "Produto cadastrado com sucesso!";  
	 		header('location:cadastro-produto.php');
		 } else {
	 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 }	

	
	// }else{
	// 	//Upload não efetuado com sucesso, exibe a mensagem
	// 		echo "
	// 			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
	// 			<script type=\"text/javascript\">
	// 				alert(\"Imagem não foi cadastrada com Sucesso.\");
	// 			</script>";
	// 		}
	 



mysqli_close($conn);

?>
