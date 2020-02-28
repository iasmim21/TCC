<?php session_start(); ?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">

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
					Entre ou crie uma conta
				</span>

			<div class="not_user">
				<?php
		
				if (isset($_SESSION['message'])){
					echo $_SESSION['message'];
				}
				unset($_SESSION['message']);
				?>
			</div>

			<div class="sucess_user">
				<?php
		
				if (isset($_SESSION['sucesso'])){
					echo $_SESSION['sucesso'];
				}
				unset($_SESSION['sucesso']);
				?>
			</div>
				<?php if (isset($_GET['var'])) {
					$var = $_GET['var'];				
				}
				 ?>
			
				<form class="login100-form validate-form" method="POST" action="login.php?
				<?php if (isset($_GET['var'])) {
					echo "var=cart";				
				}
				 ?>>">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
						
					</div>

					<div class="container-login100-form-btn">
						<a href="esqueceu_senha.php" target="_bblank">Esqueceu sua senha?</a>
					</div>

					<div class="container-login100-form-btn">
						<a href="cadastro_entrar.php">Cadastre-se</a>
					</div>

				</form>
				
			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>

	<script>
         $(function () {
            $("#heade").load("teste_header.php");
            //$("#footer").load("footer.html");
         });
      </script>
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
</body>
</html>