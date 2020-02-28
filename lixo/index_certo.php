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

<!-- ícone do navegador -->
	<link href="images/favicon.ico" rel="shortcut icon"/>

</head>
<body>

<div class="super_container">

	<!-- Cabeçalho/header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<!--<div class="logo"><a href="#">ST</a></div>-->
							<div class="logo"><img src="images/logo.png"></div>
							<nav class="main_nav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li class="hassubs">	
										<a href="categories.html">Produtos</a>
										<ul>
											<!--exibe as categorias-->
											<?php while($dado = $query->fetch_array()){?>
												<li><a href="categoria.php?categoria=<?php echo $dado['cod'] ?>"> <?php echo $dado['descricao']?></a></li>							
											<?php } ?> 
										</ul>		
									</li>
									<li><a href="blog.php">História</a></li>
									<li><a href="contact.html">Contato</a></li>
									<li><a href="login_entrar.php">Login</a></li>
								</ul>
							</nav>


							
							<div class="header_extra ml-auto"><!--
								<div class="shopping_cart">
									<a href="cart.html">
										 ÍCONE SACOLA DE COMPRA
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Carrinho <span>(0)</span></div>
									</a>
								</div>
									-->

								
								<div class="search">
									<div class="search_icon">
										<!-- ÍCONE DE PESQUISA-->
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
										 xml:space="preserve">
										<g> 
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									</svg>
									</div>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Pesquisa -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Pesquise aqui" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
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
								A livraria Santo Antônio de Pádua atua a quase 9 anos no comércio de artigos religiosos e se localiza na avenida Nereu Ramos,  Galeria Colares no centro de Sombrio, Santa Catarina. Confira ao lado um vídeo de apresentação da loja!

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