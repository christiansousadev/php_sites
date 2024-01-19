<?php 
//OBSERVAÇÕES
// este script foi comprado pelo comprepronto.com.br
// O gerenciador tem uma programação independente do site ele esta ligado ao site apenas pelo banco de dados e este arquivo de configuração portanto não é necessário outra configurações alem deste arquivo para utilizar o script, apenas se quiser editar o sistema.

$config = array();
/////////////////////////////////////////////////////////////////////////////////////////////////
// Configrações de base de dados do servidor (coloque aqui os dados do banco de dados MYSQL da sua hospedagem)
$config['SERVIDOR'] = "localhost"; // host do servidor de banco de dados (para cpanel a maioria utiliza localhost)
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
// Configuração para certificado digital
$config['https'] = false; // true para sim, false para não

/////////////////////////////////////////////////////////////////////////////////////////////////
// Configrações de Pasta
$config['PASTA'] = ""; //caso os arquivos não fiquem na raiz da hospedagem e sim em uma pasta dentro do servidor
$config['PASTA_LOCAL'] = ""; //caso utilize xampp para trabalhar localhost coloque apenas o nome da pasta dentro do htdocs

/////////////////////////////////////////////////////////////////////////////////////////////////
// Token
$config['TOKEN'] = "qualquerpalavra"; // qualquer palavra para gerar o token de segurança de acesso aos arquivos via http

/////////////////////////////////////////////////////////////////////////////////////////////////
// analytics
$config['analytics'] = "

";