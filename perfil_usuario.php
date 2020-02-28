<?php
session_start();
include('conn.php');
$cod=$_SESSION['id'];


	//verifica se o usuário esta logado ou não
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	$_SESSION['message']="Você precisa fazer login!";
	header('location:login_entrar.php');
}


$userq=mysqli_query($conn,"select * from `cliente` where cod='$cod'");
$userrow=mysqli_fetch_array($userq);

$end=mysqli_query($conn,"select * from `endereco` where cod={$userrow['endereco']}");
$endrow=mysqli_fetch_array($end);

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Livros</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/perfil_usuario.css">
	<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">


	<!-- ícone de login e senha -->
	<link rel="stylesheet" type="text/css" href="plugins/Linearicons-Free-v1.0.0/icon-font.min.css">

	<!-- ícone do navegador -->
	<link href="images/livros.ico" rel="shortcut icon"/>
</head>
<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div id="heade"></div>
		</header>

<!--Login-->


<div class="limiter">

	<div class="container-login100" style="background-image: url('images/jesus.jpg');">

		<div class="wrap-login100">
			<span class="login100-form-title">
				Minha conta

			</span>

			<!-- mensagem de erro-->
			<div class="erroEdit">
				<?php
				if (isset($_SESSION['message'])){
					echo $_SESSION['message'];
				}
				unset($_SESSION['message']);
				?>
			</div>


			<!-- Mensagem sucesso-->
			<div class="sucessoEdit">
				<?php
				if (isset($_SESSION['sucesso'])){
					echo $_SESSION['sucesso'];
				}
				unset($_SESSION['sucesso']);
				?>
			</div>


			<div class="row">
				<!-- Quadro dados pessoais-->
				<div class="col-md-6">
					<p class="dad">Dados pessoais</p>
					<div class="quadro2">
						<div class="modal-div">
							<label class="modal-100">Como te chamamos:</label>
							<div class="input-perfil">
								<?php echo $userrow['login']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Nome Completo:</label>
							<div class="input-perfil">
								<?php echo $userrow['nome']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Email:</label>
							<div class="input-perfil">
								<?php echo $userrow['email']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Senha:</label>
							<div class="input-perfil">
								<?php echo $userrow['senha']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">CPF:</label>
							<div class="input-perfil">
								<?php echo $userrow['cpf']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Telefone:</label>
							<div class="input-perfil">
								<?php echo $userrow['telefone']; ?>

							</div>	
							
						</div>

					</div>

				</div>

				<div class="col-md-6">
					<p class="end">Endereço</p>
					<!--Quadro dados -->
					<div class="quadro2">
						<div class="modal-div">
							<label class="modal-100">Estado:</label>
							<div class="input-perfil">
								<?php echo $endrow['estado']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Cidade:</label>
							<div class="input-perfil">
								<?php echo $endrow['cidade']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Bairro:</label>
							<div class="input-perfil">
								<?php echo $endrow['bairro']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Rua:</label>
							<div class="input-perfil">
								<?php echo $endrow['rua']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">CEP:</label>
							<div class="input-perfil">
								<?php echo $endrow['cep']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Número da casa:</label>
							<div class="input-perfil">
								<?php echo $endrow['n_casa']; ?>

							</div>		
						</div>

						<div class="modal-div">
							<label class="modal-100">Complemento:</label>
							<div class="input-perfil">
								<?php echo $endrow['complemento']; ?>

							</div>		
						</div>
					</div>		
				</div>
			</div>

			<div class="container-login100-form-btn">
				<button type="button" class="login100-form-btn" data-toggle="modal" data-target="#myModal">Editar Informações</button>

				<button type="button" class="login100-form-btn" data-toggle="modal" data-target="#modalExcluir">Excluir conta</button>
			</div>
		</div>
	</div>
</div>


<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!-- Modal Editar-->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Editar Informações</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>		          
			</div>
			<div class="modal-body">

				<form class="login100-form" method="POST" action= "editarPerfil.php">
					
					<div class="row">
						<div class="col-lg-6">
							<span>Dados Pessoais</span>
							<div class="quadro">

								<div class="modal-div">
									<label class="modal-100">Como te chamamos:</label>
									<input class="input-modal" type="text" name="loginEdit" value="<?php echo $userrow['login']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Nome Completo:</label>
									<input class="input-modal" type="text" name="nomeEdit" value="<?php echo $userrow['nome']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Email:</label>
									<input class="input-modal" type="text" name="emailEdit" value="<?php echo $userrow['email']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Senha:</label>
									<input class="input-modal" type="text" name="senhaEdit" value="<?php echo $userrow['senha']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">CPF:</label>
									<input class="input-modal" type="text" name="cpfEdit" id="cpf" value="<?php echo $userrow['cpf']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Telefone:</label>
									<input class="input-modal" type="text" name="telefoneEdit" id="fone" value="<?php echo $userrow['telefone']; ?>">		
								</div>

							</div>

						</div>

						<div class="col-lg-6">

							<span>Endereço</span>
							<div class="quadro">
								<div class="modal-div">
									<label class="modal-100">Estado:</label>
									<input class="input-modal" type="text" name="estadoEdit" value="<?php echo $endrow['estado']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Cidade:</label>
									<input class="input-modal" type="text" name="cidadeEdit" value="<?php echo $endrow['cidade']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Bairro:</label>
									<input class="input-modal" type="text" name="bairroEdit" value="<?php echo $endrow['bairro']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Rua:</label>
									<input class="input-modal" type="text" name="ruaEdit" value="<?php echo $endrow['rua']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">CEP:</label>
									<input class="input-modal" type="text" id="cep" name="cepEdit" value="<?php echo $endrow['cep']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Número da casa:</label>
									<input class="input-modal" type="number" name="n_casaEdit" value="<?php echo $endrow['n_casa']; ?>">		
								</div>

								<div class="modal-div">
									<label class="modal-100">Complemento:</label>
									<input class="input-modal" type="text" name="complementoEdit" value="<?php echo $endrow['complemento']; ?>">		
								</div>
							</div>		
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="login100-form-btn" onclick="form.submit()" data-dismiss="modal" value="Editar" />
					</div>
				</form>





			</div>
			
		</div>
	</div>
</div>


<!-- Modal Exluir-->
<div class="modal fade" id="modalExcluir" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-mg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Excluir conta</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>		          
			</div>
			<div class="modal-body">
				<h4>Tem certeza que deseja excluir sua conta?</h4>
				<h5>Essa ação não poderá ser desfeita</h5>		
			</div>

			<div class="modal-footer">
				<form method="POST" action="excluir.php"><button class="login100-form-btn" >Excluir</button></form>
			</div>
			

			</div>
			
		</div>
	</div>
</div>

<!--marcara-->
<script src="js/jquery-3.2.1.min.js"></script>
<script>
         $(function () {
            $("#heade").load("teste_header.php");
            //$("#footer").load("footer.html");
         });
      </script>

<script type="text/javascript" src="plugins/mask/jquery.mask.min.js"></script>
<script>
	$(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
    $('#fone').mask('(00) 00000-0000');
    $('#cep').mask('00000-000'); 
});
</script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/custom.js"></script>