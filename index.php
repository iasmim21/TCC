<?php
session_start();
include('conn.php');

$cat = "SELECT * FROM categoria";

$query=mysqli_query($conn,$cat) or die(' Erro na query:' . $cat . ' ' . mysql_error() );





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




<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">

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
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!--<div class="home_slider_background" style="background-image:url(images/painel.jpg)"></div>-->
					<div class="home_slider_background" style="background-image:url(images/santo.png)"></div>

					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Livraria Santo Antônio</div>
										<div class="home_slider_subtitle">"é viva a palavra quando são as obras que falam"</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/painel03.png)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">O site com a maior variedade de artigos religiosos!</div>
										<div class="home_slider_subtitle">Artigos de decoração, Livros, DVDs, imagens, quadros, dentre outros muitos artigos!</div>
										<div class="button button_light home_button"><a href="#">Compre Agora</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Home Slider Dots 
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>-->
		</div>
	</div>


	<!-- Products -->
	<div class="conheca">Conheça nossos produtos</div>

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product alterado -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/livros2.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=2">Livros</a>
									</div>		
								</div>
							</div>
															
						</div> 

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/imagensre.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=3">Imagens</a>
									</div>		
								</div>
							</div>
															
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/quadros.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=4">Quadros</a>
									</div>		
								</div>
							</div>
															
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/chaveiros.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=5">Chaveiros</a>
									</div>		
								</div>
							</div>
															
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/decoracoes.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=6">Decoração</a>
									</div>		
								</div>
							</div>
															
						</div>
						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/biblias.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=10">Bíblias</a>
									</div>		
								</div>
							</div>
															
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/adornos.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=1">Adornos</a>
									</div>		
								</div>
							</div>
															
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/crucifixos2.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=11">Crucifixos</a>
									</div>		
								</div>
							</div>									
						</div>


						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/correntesfolheados.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=7">Correntes Folheadas</a>
									</div>		
								</div>
							</div>									
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/terco2.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=8">Terços</a>
									</div>		
								</div>
							</div>									
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image">
								<div class="efeito_produto">	
									<img src="images/categorias/outros.jpg" alt="">
									<div class="categoria">
										<a href="categoria.php?categoria=9">Outros</a>
									</div>		
								</div>
							</div>									
						</div>

					</div>
						
				</div>
			</div>
		</div>
	</div>


	<!-- Ad História Santo Antonio -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(images/painel1.jpg)"></div> 
						<div class="avds_xl_content">
							<div class="avds_title">Conheça</div>
							<div class="avds_text">Saiba quem foi Santo Antonio, sua história, e se inspire com essa e muitas outras histórias</div>
							<div class="avds_link avds_xl_link"><a href="blog.php">Ver mais</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 

	


	<!-- testeeeee -->

	<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>Fique por dentro</h1>
							<p>
								A livraria Santo Antônio de Pádua atua a quase uma década no comércio de artigos religiosos e se localiza na avenida Nereu Ramos,  Galeria Colares no centro de Sombrio, Santa Catarina. Confira ao lado um vídeo sobre a loja!

							</p>
						
						</div>
						<div class="col-lg-6 home-about-right">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/CHJz7C09cAk?rel=0&arp;autoplay=1" ,frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div> 
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
