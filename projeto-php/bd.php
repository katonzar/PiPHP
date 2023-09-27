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

</head>

<h1>Ame-se você mesmo.</h1>

<body>
<form method="POST" action="salva_msg.php">
    <div class="formulário">
    <br></br>
    Nome: <input type="text" name="nome" id="nome" placeholder="Digite seu nome." required>
    <br></br>
    E-mail: <input type="email" name="email" id="email" placeholder="Digite seu email." required>
    <br></br>
    Digite sua pergunta: <textarea type ="text" name="pergunta" id="pergunta" required></textarea>
    <br></br>
    <input class= "botao" type="submit" value="Enviar">
</div>
</form>


<style>
h1 {
    font-size: 100px;
    text-align: center;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
 } 

html {
    background-image: url("img/hipertensão-metas_jpeg.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    opacity: 0.7;
}

form {
        font-size: 30px;
        text-align: center;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
}

input {
        width: 500px;
        font-size: 30px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        text-align: left;
        resize: horizontal;
        overflow: auto;
        margin-right:20px;
}


#pergunta {
       width: 500px;
       height: 80px;
       font-size: 20px;
       overflow: auto;

}

span {
    display:inline-block;resize:both;overflow:hidden;padding-right:20px;border:1px solid red
}


</style>
    
</body> 
      
    <footer>&copy;Criado por Grupo007 de PI UNIVESP 2023</footer>

</html>

<?php
session_abort();
?>