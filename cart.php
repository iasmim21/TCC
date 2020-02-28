<?php
session_start();
include('conn.php');        
          if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
        
      //adiciona produto
        
      if(isset($_GET['acao'])){
           
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
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
                  $id  = intval($id);
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
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="Descrição" content="Loja Virtual"/>
        <meta name="Autor" content="Márcio Barbosa - arte.marciobarbosa@gmail.com"/>
      
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    </head>
    <body>
        <div class="container clearfix">
           
            <div class="interface">
                <table class="tabela-carrinho">
                <caption><h2 class="detalhes">Carrinho de Compras</h2></caption>
                    <thead>
          <tr>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Preço</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
          </tr>
    </thead>
            <form action="?acao=up" method="post">
    <tfoot>
           <tr>
            <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
            <tr>
            <td colspan="5"><a href="index.php">Continuar Comprando</a></td>
    </tfoot>
       
    <tbody>
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
                                
                              $total += $ln['preco'] * $qtd;
                             
                           echo '<tr>       
                                 <td>'.$nome.'</td>
                                 <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                 <td>R$ '.$preco.'</td>
                                 <td>R$ '.$sub.'</td>
                                 <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                              </tr>';
                        }
                           $total = $total;
                           echo '<tr>
                                    <td colspan="4">Total</td>
                                    <td>R$ '.$total.'</td>
                              </tr>';
                     }
               ?>
     
     </tbody>
        </form>
            </table>
        </div>
    
    </body>
</html>