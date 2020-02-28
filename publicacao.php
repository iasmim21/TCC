<?php
session_start();
include('conn.php');

$cod= $_GET['cod'];

$consulta = "SELECT * FROM site WHERE cod='$cod'";
$query=mysqli_query($conn,$consulta) or die(' Erro na query:' . $consulta . ' ' . mysql_error() );
$dado = $query->fetch_array();

$imagem= explode(',', $dado['imagens']);


?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
<title>Livraria Santo Antônio</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="styles/blogstyle.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<!-- ícone do navegador -->
	<link href="images/favicon.ico" rel="shortcut icon"/>

</head>
<body>

<div class="super_container">

	<!-- Cabeçalho/header -->

	<header class="header">
		<div id="heade"></div>
	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cat.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						
							
								<div class="home_title"><?php echo $dado['titulo']?></div>
								<!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
							
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row ">
		<div class="coluna_imagem"><img height="400px" width="300px" src="admin/publicacoes/<?php echo $imagem[0] ?>" alt=""></div>
		<div class="coluna_historia"><?php echo $dado['postagens']?></div>
	</div>



	</div>

	<!-- Footer -->
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="frase col-6">  
				<img class="biblia" src="images/biblia.png">  
				<p>"é viva a palavra quando são as obras que falam"</p>       
				</div>

				
				<div class="frase col-6">
					<h4>Alguma Dúvida?</h4>
					<p>48 99962-6187 ou livraria@gmail.com</p>
					
				</div>
			</div>
		</div>
			
			</div>
		</footer>

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
<script src="js/custom.js"></script>
</body>
</html>