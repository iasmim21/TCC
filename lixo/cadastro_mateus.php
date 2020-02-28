<?php
require_once('cadastro.php');

if (isset($_POST['cadastro'])){
    $nome = $_POST['nomeCad'];
    $email = $_POST['emailCad'];
    $senha = $_POST['senhaCad'];
    $telefone = $_POST['telefoneCad'];
    $dataNasc = $_POST['nascCad'];
    $preferencias = $_POST['prefCad'];
    $obs = $_POST['obsCad'];

    $testaEmail = $mysqli->query("SELECT COUNT(*) FROM cliente where email = '{$email}'");
    $linha = $testaEmail->fetch_row();

    if ($linha[0] > 0){
        echo "<script>alert('Email já cadastrado')</script>";
        echo "<script>window.location.href='cadastro.php'</script>";
    }else{
        $sql = "insert into cliente(nome, email, senha, telefone, data_nasc, preferencias, obs) values ('$nome','$email', '$senha','$telefone','$dataNasc','$preferencias','$obs')";
        $query = $mysqli->query($sql)or die($mysqli->error);

        if(!$query){
            echo "<script>alert('erro!')</script>";

        }else{
            echo "<script>alert('Cadastrado com sucesso!')</script>";
            echo "<script>window.location.href='indexAgen.php'</script>";
        }
    }
}
?>