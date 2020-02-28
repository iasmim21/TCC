<?php
session_start();
include('conn.php');
$cod= $_GET['cod'];


$consulta = "SELECT * FROM produto WHERE cod='$cod'";
$query=mysqli_query($conn,$consulta) or die(' Erro na query:' . $consulta . ' ' . mysql_error() );
$dado = $query->fetch_array();

$cat= $dado['categoria'];
$cate="SELECT * FROM categoria WHERE cod= '$cat'";
$categoria=mysqli_query($conn,$cate) or die(' Erro na query:' . $cate . ' ' . mysql_error() );
$catego = $categoria->fetch_array();

$consul="SELECT * FROM produto WHERE categoria= '$cat'";
$pro=mysqli_query($conn,$consul) or die(' Erro na query:' . $consul . ' ' . mysql_error() );
$pro_relac = $pro->fetch_array();





$imagem= explode(',', $dado['imagens']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $dado['nome'] ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div id="heade"></div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cat.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						
							
								<div class="home_title"><?php echo $catego['descricao']?> / <?php echo $dado['nome']?></div>
								<!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
							
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img height="500px" width="600px" src="admin/produtos/<?php echo $imagem[0] ?>" alt=""></div>
						<div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="admin/produtos/<?php echo $imagem[0] ?>"><img height="100px" src="admin/produtos/<?php echo $imagem[0] ?>" alt=""></div>
							<div class="details_image_thumbnail" data-image="admin/produtos/<?php echo $imagem[1] ?>"><img height="100px" src="admin/produtos/<?php echo $imagem[1] ?>" alt=""></div>
							<div class="details_image_thumbnail" data-image="admin/produtos/<?php echo $imagem[2] ?>"><img height="100px" src="admin/produtos/<?php echo $imagem[2] ?>" alt=""></div>
							
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?php echo $dado['nome']?></div>
						<!-- <div class="details_discount">$890</div> -->
						<div class="details_price">R$ <?php echo $dado['preco']?></div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Disponibilidade:</div>
							<span>Em estoque</span>
						</div>
						<div class="details_text">
							<p><?php echo $dado['descricao']?></p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Quantidade:</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="carrinho.php?acao=add&id=<?php echo $cod ?>">Comprar</a></div>
							<!-- <div class="button car cart_button"><a href="#"><i class="save fa fa-heart-o " aria-hidden="true"></i>Guardar</a></div> -->
							<div class="coupon col-lg-9">
								<div class="section_title">Calcule o frete</div>
								<div class="section_subtitle">Entregue pelos Correios</div>	
								<div class="coupon_form_container">
									<div class="coupon_form">
									
										<input type="text" class="coupon_input" placeholder="Digite seu CEP" id="frete" name="frete" required="required">
										<button class="button coupon_button" ><span>Calcular</span></button>
									</div>
								</div>
								<div class="resposta" id='resposta'></div>
							</div>										
					</div>
				</div>
			</div>

			<!-- <div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Características</div>
						
					</div>
					<div class="description_text">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="products_title">Produtos Relacionados</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">


 					<?php for ($i = 0; $i < 4; $i++){ 
 							
 						?>

 						<!-- Product -->
						<div class="product">
							<div class="product_image"><img  height="300px"src="admin/produtos/<?php echo $imagem[0] ?>" alt=""></div>
							<div class="product_extra product_new"><a href="categories.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php?cod=<?php echo $dado['cod'] ?>"><?php echo $pro_relac['nome'] ?></a></div>
								<div class="product_price">R$ <?php echo $pro_relac['preco'] ?></div>
							</div>
						</div>







 					<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Footer -->
	
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script>
         $(function () {
            $("#heade").load("teste_header.php");
            //$("#footer").load("footer.html");
         });
</script>

<script> //calculo frete
    var frete = $("#frete"); 
        frete.change(function() { 
            $.ajax({ 
                url: 'calcularFrete.php?cod=<?php echo $cod ?>', 
                type: 'POST', 
                data:{"frete" : frete.val()}, 
                success: function(data) { 
                console.log(data); 
                data = $.parseJSON(data); 
               // $("#resposta").text(data.email);
			   //$("#submit").attr("disabled", true);

				$("#resposta").html(data.frete);
		
                
            } 
        }); 
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
<script src="js/product.js"></script>
</body>
</html>