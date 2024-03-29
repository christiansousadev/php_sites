<?php
session_start();
date_default_timezone_set("Brazil/East");
require_once('_config.php');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// definição para ssl
if($config['https']){
    if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ) { } else {
        $new_url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        echo "<script>window.location='$new_url';</script>";
        exit;
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Definiçoes
if($_SERVER['HTTP_HOST'] == 'localhost'){
    define("SERVIDOR", $config['SERVIDOR_LOCAL']);
    define("USUARIO", $config['USUARIO_LOCAL']);
    define("SENHA", $config['SENHA_LOCAL']);
    define("BANCO", $config['BANCO_LOCAL']);
} else {
    define("SERVIDOR", $config['SERVIDOR']);
    define("USUARIO", $config['USUARIO']);
    define("SENHA", $config['SENHA']);
    define("BANCO", $config['BANCO']);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Definiçoes de Pastas
if($config['https']){
    if($_SERVER['HTTP_HOST'] == 'localhost'){
        $config_dominio = "https://".$_SERVER['HTTP_HOST']."/".$config['PASTA_LOCAL']."/";
    } else {
        if($config['PASTA']){
            $config_dominio = "https://".$_SERVER['HTTP_HOST']."/".$config['PASTA']."/"; 
        } else {
            $config_dominio = "https://".$_SERVER['HTTP_HOST']."/";
        }
    }
} else {
    if($_SERVER['HTTP_HOST'] == 'localhost'){
        $config_dominio = "http://".$_SERVER['HTTP_HOST']."/".$config['PASTA_LOCAL']."/";
    } else {
        if($config['PASTA']){
            $config_dominio = "http://".$_SERVER['HTTP_HOST']."/".$config['PASTA']."/"; 
        } else {
            $config_dominio = "http://".$_SERVER['HTTP_HOST']."/";
        }
    }
}
define("DOMINIO", $config_dominio);
define("PASTA_CLIENTE", DOMINIO."sistema/arquivos/");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Outras Definições
define("COD_CLIENTE", '0');
define("AUTOR", "fabricadosite.com");
define("TOKEN", md5($config['TOKEN']) );
 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//SISTEMA 

define("CONTROLLERS", '_controllers/'); 
define("VIEWS", '_views/');
define("MODELS", '_models/');
define("LAYOUT", DOMINIO.VIEWS);

require_once('_system/system.php');
require_once('_system/mysql.php');
require_once('_system/controller.php');
require_once('_system/model.php');

//analytcs
define("ANALYTICS", $config['analytics']); 

//carrega os models automaticamente
function auto_carregador($arquivo) {
    if(file_exists(MODELS.$arquivo.".php")){
      require_once(MODELS.$arquivo.".php");
    } else {
        echo "Erro: O Model '".$arquivo."' não foi encontrado!";
        exit;
    }
}
spl_autoload_register("auto_carregador");

$start = new system();
$start->run();