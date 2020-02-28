<?php
session_start();
include('conn.php');


	//verifica se o usuário esta logado ou não
$cod=$_SESSION['id'];

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	$_SESSION['message']="Você precisa fazer login!";
	header('location:login_entrar.php?var=cart');
}





if (!isset($_SESSION['carrinho'])) { //se nao existir a seção é criado um array
	$_SESSION['carrinho'] = array();
}

if(isset($_GET['acao'])){
//ADICIONAR CARRINHO
	if(isset($_GET['acao']) && $_GET['acao']== 'add'){ //se o usuário clicou em add carrinho
		$id = intval($_GET['id']); // pega o cod do produto que vem na url
		if(!isset($_SESSION['carrinho'][$id])){ // se o produto ainda não foi add
			$_SESSION['carrinho'][$id] = 1;
		}else{
			$_SESSION['carrinho'][$id] += 1; //se já existe adiciona 1 na quantidade
		}
	}
	//REMOVER CARRINHO
	if($_GET['acao'] == 'del'){
		$id = intval($_GET['id']);
		if(isset($_SESSION['carrinho'][$id])){
			unset($_SESSION['carrinho'][$id]);
		}
	}
	//ALTERAR QUANTIDADE
	if($_GET['acao'] == 'up'){
		if(is_array($_POST['prod'])){
			foreach($_POST['prod'] as $id => $qtd){
				$id  = intval($id);
				$qtd = intval($qtd);
				if(!empty($qtd) || $qtd <> 0){
					$_SESSION['carrinho'][$id] = $qtd;
				}else{
					unset($_SESSION['carrinho'][$id]);
				}
			}
		}
	}
}


	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
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
						<div class="home_title">Meu Carrinho</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Produto</div>
						<div class="cart_info_col cart_info_col_price">Preço</div>
						<div class="cart_info_col cart_info_col_quantity">Quantidade</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
					</div>
				</div>
			</div>

			<form action="?acao=up" method="post">
			<div class="row cart_items_row">
				<div class="col">


					<?php
                     if(count($_SESSION['carrinho']) == 0){
                        echo 'Não há produto no carrinho';
                     }else{
                        $total = 0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                          //$sql   = "SELECT * FROM produto WHERE id= '$id'";
                          //$qr    = mysqli_query($conn, $sql) or die(mysql_error());

                          $consulta = "SELECT * FROM produto WHERE cod='$id'";
                          $query=mysqli_query($conn,$consulta) or die(' Erro na query:' . $consulta . ' ' . mysql_error() );
                          $ln    = mysqli_fetch_assoc($query);
                          $nome  = $ln['nome'];
                          $preco = $ln['preco'];
                          $sub   = $ln['preco'] * $qtd;

                          $imagem= explode(',', $ln['imagens']);
                                
                              $total += $ln['preco'] * $qtd;
                             
                           
               ?>


					

						<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img height="163px" width="183px"src="admin/produtos/<?php echo $imagem[0]?>" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#"><?php echo $nome ?></a></div>
								<div class="cart_item_edit"><a href="?acao=del&id=<?php echo $id ?>">Remover</a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price"><?php echo $preco ?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									
									<input type="text" size="3" name="prod[<?php echo $id ?>]" value="<?php echo $qtd ?>" />
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Total -->
						<div class="cart_item_total"><?php echo $sub ?></div>
					</div> <!-- end item-->

					<?php 

						} //end foreach
						$total = $total;
						echo '<tr>
								<td colspan="4">Total</td>
								<td>R$ '.$total.'</td>
								</tr>';

						
				}//end else
				?>





					

					

				</div>
			</div>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="index.php">Comprar +</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							
							
							<input class="button update_cart_button" type="submit" value="Atualizar Carrinho" />
						</div>
					</div>
				</div>
			</div>

		</form>


			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Shipping method</div>
						<div class="section_subtitle">Select the one you want</div>
						<div class="delivery_options">
							<label class="delivery_option clearfix">Next day delivery
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$4.99</span>
							</label>
							<label class="delivery_option clearfix">Standard delivery
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$1.99</span>
							</label>
							<label class="delivery_option clearfix">Personal pickup
								<input type="radio" checked="checked" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">Free</span>
							</label>
						</div>
					</div>

					<!-- Coupon Code -->
					<div class="coupon">
						<div class="section_title">Coupon code</div>
						<div class="section_subtitle">Enter your coupon code</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button"><span>Apply</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto">$790.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Shipping</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto">$790.90</div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="#">Proceed to checkout</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Sublime.</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>