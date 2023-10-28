<?php
session_start();
ob_start();
include_once('conexao.php');
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$pergunta = $_POST ['pergunta'];

$msg_contato = "INSERT INTO duvidas (nome, email, pergunta) VALUES ('$nome', '$email', '$pergunta')";
$resultado_contato = mysqli_query($conn, $msg_contato);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Hipertensão Auto-Cuidado</title>
    <meta name="description" content="Página para pessoas tirarem dúvidas sobre suto-cuidado dom HAS">
    <meta name="author" content="Grupo PI Univesp 2023">
    <meta name="keywords" content="auto-cuidado, has, comorbidades">
    <meta name="robots" content="index,follow">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3600">
    <link rel="shortcut icon" href="img/logo.ico">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>

<body>

<div class="alert alert-success" role="alert">
Sua pergunta foi recebida com sucesso!<br></br> 
    Aguarde que um especialista entrará em contato com você no email cadastrado! Cuide-se!
</div>



<div class="btn-group">
  <a href="index.php" class="btn btn-primary active" aria-current="page">PÁGINA INICIAL</a>
  <a href="bd.php" class="btn btn-primary">VOLTAR</a>
</div>

<div class="text-center">
  <img src="img\HAS.jpg" style: width="80%" height="80%">
</div>  

<style>
  .text-center{
    animation-name: animacao;
    animation-duration: 5s;
    animation-iteration-count: infinite;
  }


@keyframes animacao{
  100% { 
    width: 100%;
  }
  50%{
      width: 50%;
  }
  0%{
    width: 0%
  }
}
</style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<footer>&copy;Criado por Grupo007 de PI UNIVESP 2023</footer>

</html>

<?php
session_abort();
?>