<?php session_start(); ?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
<title>Cadastre-se</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cadastro.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">

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
		<div class="fundo" style="background-image: url('images/jesus.jpg');">
			<div class="wrap-login100">	
				<span class="login100-form-title">Cadastre-se</span>

				<form class="login100-form" method="POST" action="cadastro.php">
					<div class="dadospessoais">
					<a>Dados Pessoais</a>
				</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="login" placeholder="Como você gostaria de ser chamado?" required>
							
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Nome Completo" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" id="cpf" name="cpf" placeholder="CPF" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" id="fone" name="telefone" placeholder="Telefone" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="email" id="email" name="email" placeholder="Email" required>
						<div class="resposta" id='resposta'></div>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password" id="password" placeholder="Senha" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirme sua senha" required>
						
					</div>

					<div class="wrap-input100">

						<div class="input100">
							<label>Sexo</label>           
	                		<input type="radio" name="sexo" value="2"> Masculino
	               			<input type="radio" name="sexo" value="1"> Feminino
               			</div>
            
					</div>

					<div class="endereco">
						<a>Endereço</a>	
					</div>
						
					<div class="wrap-input100">
						<input class="input100" type="text" name="estado" placeholder="Estado" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="cidade" placeholder="Cidade" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="bairro" placeholder="Bairro" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="rua" placeholder="Rua" required>
						
					</div>					

					<div class="wrap-input100">
						<input class="input100" type="text" id="cep" name="cep" placeholder="CEP" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="number" name="casa" placeholder="Número da Casa" required>
						
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="complemento" placeholder="Complemento" required>
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="submit">
							Cadastrar
						</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>

<script> // Confirmação de senha
  $(function(){
	$("#submit").click(function(){
      var senha = $("#password").val();
      var senha2 = $("#confirmPassword").val();
      if(senha != senha2){
        event.preventDefault();
      	alert("Por favor confirme a senha corretamente!");
      }
    });
  });
</script>

<script> //Verifica email
    var email = $("#email"); 
        email.change(function() { 
            $.ajax({ 
                url: 'verificaEmail.php', 
                type: 'POST', 
                data:{"email" : email.val()}, 
                success: function(data) { 
                console.log(data); 
                data = $.parseJSON(data); 
               // $("#resposta").text(data.email);
			   //$("#submit").attr("disabled", true);

				$("#resposta").text(data.email === "ok" ? '' : data.email);
				$("#submit").attr("disabled", data.email === "ok" ? false : true);
                
            } 
        }); 
    }); 
</script>




<script>
    $(function () {
        $("#heade").load("teste_header.php");
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