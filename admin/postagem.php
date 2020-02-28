<?php
session_start();
include('conn.php');

$consulta = "SELECT * FROM site";

$query=mysqli_query($conn,$consulta) or die(' Erro na query:' . $consulta . ' ' . mysql_error() );


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
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
        <!-- Header-->
<!-- 
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Postagens</strong>
                            </div>

                            <!-- TABELA QUE EXIBE AS POSTAGENS-->
                            <div class="table-stats  ov-h">
                                <table class="table">
                                    <tbody>
                                    <?php                                                         
                                        while($dado = $query->fetch_array()){?>
                                            <tr>
                                                <td class="serial"><?php echo $dado['cod']?></td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="publicacoes/<?php echo $dado['imagens'] ?>" alt=""></a>
                                                    </div>
                                                </td>
                                                <td><span><?php echo $dado['titulo'] ?></span></td>   
                                                <td>       
                                                    <a href='#' class="fa fa-pencil"  data-toggle="modal" data-target="#scrollmodal" ></a>
                                                    <a href='#' class="fa fa-times" data-toggle="modal" data-target="#staticModal"></a>
                                                </td>    
                                            </tr>                                               
                                    <?php } ?>       
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
  


    <!--Modal Excluir Postagem-->
    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Excluir postagem?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                               Esta ação não poderá ser desfeita. É isso que deseja fazer?
                           </p>
                       </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Excluir</button>
                       </div>
                    </div>
                </div>
    </div><!-- .modal excluir-->

    <!--Modal Editar Postagem-->
    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Editar Publicação</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <h5>Título:</h5>
                            <textarea class="form-control" rows="1"><?php echo $dado['titulo'] ?></textarea>
                            <br>
                            <h5>Publicação:</h5>                                    
                            <textarea name="descricao" rows="10" class="form-control">
                                <?php echo $dado['postagens'] ?>
                            </textarea>
                            <br>
                            <h5>Imagem:</h5>
                            <br>                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Editar</button>
                        </div>
                    </div>                             
                </div>                                                                                     
    </div><!-- .modal editar -->
   
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


</body>
</html>
