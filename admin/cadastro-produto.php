<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
       <div id="left-pane"></div>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div id="heade"></div>
        </header>
        <!-- /#header -->
        

        

        <div class=" breadcrumbs mensagem col-md-8 offset-md-2">  

             <?php
				if (isset($_SESSION['sucesso'])){
					echo $_SESSION['sucesso'];
				}
				unset($_SESSION['sucesso']);
                ?>
                
         </div>

        <div class="content">
            <div class="animated fadeIn">


                
                <div class="row">
                    

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">
                                <strong>Cadastrar Produto</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="cadastro.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Categoria</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="categoria" class="form-control">
                                                <option value="0">Por favor selecione</option>
                                                <option value="1">Adornos</option>
                                                <option value="2">Livros</option>
                                                <option value="3">Imagens</option>
                                                <option value="4">Quadros</option>
                                                <option value="5">Chaveiros</option>
                                                <option value="6">Decoração</option>
                                                <option value="7">Correntes/Folheados</option>
                                                <option value="8">Terços</option>
                                                <option value="9">Outros</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="nome" placeholder="Digite aqui" class="form-control" required></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Valor</label></div>
                                        <div class="col-12 col-md-9"><input required type="text" id="valor" name="valor"  class="form-control"><small class="form-text text-muted">Apenas números</small></div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descrição</label></div>
                                        <div class="col-12 col-md-9"><textarea required name="descricao" rows="3" placeholder="Digite aqui..." class="form-control"></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantidade</label></div>
                                        <div class="col-12 col-md-9"><input  required type="number" id="valor" name="quantidade"  class="form-control"><small class="form-text text-muted">Apenas números</small></div>
                                    </div>

                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Peso</label></div>
                                        <div class="col-12 col-md-9"><input  required type="text" id="peso" name="peso"  class="form-control"><small class="form-text text-muted">em quilogramas</small></div>
                                    </div>
                                    
            
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Imagem</label></div>
                                        <div class="col-12 col-md-9"><input required type="file" id="file-multiple-input" name="imagens[]" multiple="" class="form-control-file"><small class="form-text text-muted">Escolha 3 imagens</small></div>
                                    </div>

                                    
                                        <button type="submit" class="btn btn-primary btn-sm bot">Cadastrar</button>
                                
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>

                    

                

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/js/jquery-3.2.1.min.js"></script>

    <script>
         $(function () {
            $("#heade").load("header.php");
            $("#left-pane").load("left_panel.php");
            //$("#footer").load("footer.html");
         });
      </script>

<script type="text/javascript" src="assets/mask/jquery.mask.min.js"></script>
<script>
	$(document).ready(function(){
    $('#valor').mask('##0.00', {reverse: true});
    $('#peso').mask('0.00');
    
   
});
</script>



</body>
</html>
