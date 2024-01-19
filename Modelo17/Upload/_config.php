<?php

$config = array();
/////////////////////////////////////////////////////////////////////////////////////////////////
// Configrações de base de dados do servidor (coloque aqui os dados do banco de dados MYSQL da sua hospedagem)
$config['SERVIDOR'] = "localhost";
$config['USUARIO'] = "";
$config['SENHA'] = "";
$config['BANCO'] = "";

/////////////////////////////////////////////////////////////////////////////////////////////////
// Configrações de base de dados local (apenas para trabalhar em ambiente local)
$config['SERVIDOR_LOCAL'] = "localhost";
$config['BANCO_LOCAL'] = "";
$config['USUARIO_LOCAL'] = "";
$config['SENHA_LOCAL'] = "";

/////////////////////////////////////////////////////////////////////////////////////////////////
// Configrações de Pasta
$config['PASTA'] = ""; //caso os arquivos não fiquem na raiz da hospedagem e sim em uma pasta dentro do servidor
$config['PASTA_LOCAL'] = ""; //caso utilize xampp para trabalhar local ficaria localhost/nome da pasta local

/////////////////////////////////////////////////////////////////////////////////////////////////
// Configuração para certificado digital
$config['https'] = false; // true para sim, false para não

/////////////////////////////////////////////////////////////////////////////////////////////////
// Token
$config['TOKEN'] = "1231231231919151816519848165165181reve91919"; // qualquer palavra para gerar o token de segurança

/////////////////////////////////////////////////////////////////////////////////////////////////
// Google Analytics cole o codigo de acompanhamento a baixo entre as aspas
// ATENÇÃO: caso no meio do cidigo que colar abaixo tiver aspas duplas " alterar para aspas simples ' para não conflitar )
$config['analytics'] = "

";