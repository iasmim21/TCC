<?php session_start(); ?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
<title>Recuperação</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">

<!-- ícone de login e senha -->
<link rel="stylesheet" type="text/css" href="plugins/Linearicons-Free-v1.0.0/icon-font.min.css">

</head>
<body>

<div class="super_container">

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/jesus.jpg');">
			<div class="wrap-login100">
				<span class="login100-form-title">
					Recupere sua senha
				</span>
				<a class="conf">Confira sua nova senha acessando seu email</a>

			<div class="not_user">
				<?php
		
				if (isset($_SESSION['message'])){
					echo $_SESSION['message'];
				}
				unset($_SESSION['message']);
				?>
			</div>

		


			
				<form class="login100-form validate-form" method="POST" action="recuperacao_senha.php">
					<div class="wrap-input10 validate-input">
						<input class="input100" type="text" name="email" placeholder="Digite seu email aqui">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>	
					<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="ok" type="submit">Enviar</button>
				</div>							
				</form>

					

			</div>
		</div>
	</div>

</div>

<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>

</body>
</html>