// Inincie o XAMPP e acesse o phpmyadmin. Atenção com a porta que seu XAMPP irá utilizar. Crie o database perguntas e na aba SQL, cole as instruções abaixo.//

 
CREATE TABLE IF NOT EXISTS duvidas (
  id int  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  pergunta varchar(550) COLLATE utf8mb4_unicode_ci NOT NULL
 )