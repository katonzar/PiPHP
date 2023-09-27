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
</head>

<body>

<h1>Sua pergunta foi recebida com sucesso! Aguarde que um especialista entrará em contato com você no email cadstrado! Cuide-se!</h1>

<a class= "paciente" href="index.php">PÁGINA INICIAL</a>

</body>

<footer>&copy;Criado por Grupo007 de PI UNIVESP 2023</footer>

</html>

<?php
session_abort();
?>
