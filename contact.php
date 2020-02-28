<!DOCTYPE html>
<html lang="en">
<head>
<title>Contato</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link href="images/favicon.ico" rel="shortcut icon"/>
</head>
<body>

<div class="super_container">

	<!-- Header -->

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
						
							
								<div class="home_title">Alguma dúvida ou sugestão? Entre em contato conosco!</div>
								<!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
							
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="login100-form validate-form">
						<div class="section_title">Contate-nos</div>
						<div class="section_subtitle">Estamos a sua disposição, entraremos em contato por email assim que possível!</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">Nome*</label>
										<input type="text" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Sobrenome*</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Email*</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Assunto*</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Mensagem*</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button class="button contact_button"><span>Enviar</span></button>
							</form>
						</div>
					</div>
				

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Telefone</div>
							<ul>
								<li><span>+53 345 7953 3245</span></li>
								<li><span>+53 345 7953 3245</span></li>
								
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Email</div>
							<ul>
								<li><span>yourmail@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Localização</div>
							<ul>
								<li>Av. Getúlio Vargas</li>
								<li>N° 255 / sala 09</li>
								<li>Sombrio - SC</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		
	</footer>
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
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>