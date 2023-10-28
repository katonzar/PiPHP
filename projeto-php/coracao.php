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
    <body>

    <script language="javascript" src="./funcao.js"></script>     
    <form action="/action_page.php">
    <h1>AUTO-CUIDADO:<br>
        UM ATO DE AMOR
        PRÓPRIO!
     </h1>

    <div class="foto">
    <a id= "botao" target="_blank" href="bd.php"><br></br>Clique aqui</a>
    </div>
    </form>
             
    <style>

        h1 {
            margin-left: 500px;
            font-weight: bolder;
            font-size: 100px;
              
        }

        body{
            color: dark(19, 14, 7, 0.575);
            background-color:rgb(192, 147, 150);
            color: hsl(0, 83%, 25%);
               
          
        }

        a {
            
            margin-bottom: 900px;
            margin-left: 300px;
            font-weight: bolder;
            font-size: 100px;
            text-decoration: ivory;

        }
                
        .foto {
            background-image: url('img/medico-campinas-aula-sobre-coracao-01.jpg');
            box-shadow: inset 10px 30px 13px 30px rgb(130, 124, 138);
            background-size: 100%;
            background-repeat: no-repeat;

            height: 1000px;
            width: 1300px;
    
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
            margin-top: 250px;

            animation-name: batida;
            animation-duration: 2s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
            animation-direction: normal;
            animation-play-state: running;
            animation-iteration-count: infinite;
            }

            @keyframes batida {
                 from{
                 opacity: 0;
                }
                 to {
                opacity: 1;
               }
            }
                </style>         

        </body>
    <footer>&copy;Criado por Grupo007 de PI UNIVESP 2023</footer>

 
</html>

<?php
session_abort();
?>