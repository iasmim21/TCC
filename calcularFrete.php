<?php

function calcular_frete($cep_origem , $cep_destino, $peso, $valor, $tipo_do_frete, $altura = 6, $largura = 20, $comprimento = 20){

	$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
	$url .= "nCdEmpresa=";
	$url .= "&sDsSenha=";
	$url .= "&sCepOrigem=" . $cep_origem;
	$url .= "&sCepDestino=" . $cep_destino;
	$url .= "&nVlPeso=" . $peso;
	$url .= "&nVlLargura=" . $largura;
	$url .= "&nVlAltura=" . $altura;
	$url .= "&nVlComprimento=" . $comprimento;
	$url .= "&nCdFormato=1";
	$url .= "&sCdMaoPropria=n";
	$url .= "&nVlValorDeclarado=" . $valor;
	$url .= "&sCdAvisoRecebimento=n";
	$url .= "&nCdServico=" . $tipo_do_frete;
	$url .= "&nVlDiametro=0";
	$url .= "&StrRetorno=xml";


	$xml = simplexml_load_file($url);

	return $xml->cServico;

}

//FRETE DA PÁGINA DE PRODUTOS
#Verifica se tem um cep para pesquisa
if(isset($_POST['frete'])){ 
	include('conn.php');

	$cod = $_GET['cod']; //pega o cod do produto

	$consulta = "SELECT * FROM produto WHERE cod='$cod'";
	$query=mysqli_query($conn,$consulta) or die(' Erro na query:' . $consulta . ' ' . mysql_error() );
	$dado = $query->fetch_array();

	$peso = $dado['peso'];
	$valor = (int)$dado['preco']; // transforma o valor do produto em inteiro

    #Recebe o cep de destino
    $cepDestino = $_POST['frete'];

    if(isset($cepDestino)){ // se existir o cep de pesquisa faz a consulta

    $sedex = (calcular_frete('88960000', $cepDestino, $peso,$valor,'04014'));
    $pac = (calcular_frete('88960000', $cepDestino,$peso,$valor,'04510'));

    $exibe ="<p>Receba em até " . $sedex->PrazoEntrega . " dias úteis: " . $sedex->Valor . "</p> <p> Receba em até " . $pac->PrazoEntrega . " dias úteis: " . $pac->Valor . "</p>" ;

   
    echo json_encode(array('frete' => $exibe)); 
    }
}


//FRETE DA PÁGINA DO CARRINHO

if(isset($_POST['frete_cart'])){ 
	include('conn.php');

	

	$peso = $_GET['peso'];
	$valor = (int)$_GET['total']; // transforma o valor do produto em inteiro

    #Recebe o cep de destino
    $cepDestino = $_POST['frete_cart'];

    if(isset($cepDestino)){ // se existir o cep de pesquisa faz a consulta

    $sedex = (calcular_frete('88960000', $cepDestino, $peso,$valor,'04014'));
    $pac = (calcular_frete('88960000', $cepDestino,$peso,$valor,'04510'));

    // $exibe ="<p>Receba em até " . $sedex->PrazoEntrega . " dias úteis: " . $sedex->Valor . "</p> <p> Receba em até " . $pac->PrazoEntrega . " dias úteis: " . $pac->Valor . "</p>" ;


    		$exibe ="<div class='delivery_options'>
    						<label class='delivery_option clearfix'>Receba em até  " . $sedex->PrazoEntrega . " dias úteis. 
								<input type='radio' name='radio'>
								<span class='checkmark'></span>
								<span class='delivery_price'> R$ ". $sedex->Valor . "</span>
							</label>
							<label class='delivery_option clearfix'>Receba em até  " . $pac->PrazoEntrega . " dias úteis: 
								<input type='radio' name='radio'>
								<span class='checkmark'></span>
								<span class='delivery_price'> R$ " . $pac->Valor . "</span>
							</label>
							
						</div>";

   
    echo json_encode(array('frete_cart' => $exibe)); 
    }
}





?>