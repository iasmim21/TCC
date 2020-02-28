<?php
session_start();
include("conn.php");

foreach ($_SESSION['dados'] as $produtos) {
	$codProduto = $produtos['idProduto'];
	$codCliente = $produtos['idProduto'];
	$quantidade = $produtos['quantidade'];
	


	$insert = "INSERT INTO comprados (codProduto, codCliente, quantidade) VALUES ('$codProduto' , '$codCliente' , '$quantidade' )";
	$query = mysqli_query($conn, $insert);

	
	
	
	

}





 ?>