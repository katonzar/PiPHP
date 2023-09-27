<?php
session_start();
ob_start();
include_once 'conexao.php';
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
    
    
  
   
   

    <h1><MENU>Hipertensão Arterial Sistêmica</MENU></h1>
   <h2>Promoção do auto-cuidado</h2>
</head>

<body>
    <div class="imagem">
    <a class= "paciente" target="_blank" href="coracao.php">FALE CONOSCO</a>
</div>
    <h2> Cuidados com a Hipertensão Arterial Sistêmica</h2>
   <iframe class= "video" width="300" height="300" src="https://www.youtube.com/embed/qrzcftrboy8?si=E5XSspRk1Cjk01ha" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br/><br/>

<style>

h1 {
    font-size: 100px;
    text-align: center;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
 } 
 
 h2 {
    font-size: 80px;
    text-align: center;
    margin-top: 100px;
 }

 .paciente {
    font-family: Lucida Sans;
    font-size: 30px;
}
nav a {
    color: rgb(37, 12, 12);
}
body{
    color: dark(19, 14, 7, 0.575);
    background-color: rgb(201, 222, 235);
    color: hsl(24, 77%, 15%);
}
.video {
    margin-left: 500px;
    width: 1000px;
    height: 500px;
}

p {
    font-size: 20px;
    text-align: center;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
} 

 

.imagem {
    background-image: url('img/medico-campinas-aula-sobre-coracao-01.jpg');
    box-shadow: inset 10px 30px 13px 30px rgb(130, 124, 138);
    background-size: 100%;
    background-repeat: no-repeat;

    height: 1000px;
    width: 1500px;
    
    border-style: solid;
    border-width: 20px;
    border-color: rgba(202, 78, 78, 0.555);
    border-radius: 30px;

    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 30px;
    padding-left: 30px;

    outline-width: 50px;
    outline-style: double;
    outline-color: rgb(63, 10, 10);

    margin: auto;
    margin-top: 50px;
 }
 .fundo {
    background-image: url('img/o-sistema-cardiovascular-formado-pelo-coracao-pelos-vasos-sanguineos-5a6af33b14268.webp');
    background-size: cover;
    opacity: 0.3;
    width: 1500;
    size: 1500;
 }
 footer {
    color: black;
 }

</style>
     <p>Saiba Mais à respeito: <a href= "https://www.redalyc.org/journal/3240/324044160008/html/" target="_blank"> Vantagens do auto-cuidado na HAS </a></p> 

         
     
</body>

<footer>&copy;Criado por Grupo007 de PI UNIVESP 2023</footer>

</html>

<?php
session_abort();
?>