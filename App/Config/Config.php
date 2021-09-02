<?php
  /*
  * Definição do arquivo de Config(configurações) estabelecendo dados em array para obter conexão
  * com servidor MySQL de acordo com ambiente de desenvolvimento estabelecido e utilizado
  */
  require_once "Environment.php";

  $config = array();

  if(ENVIRONMENT == "development") {
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_ajax_mvc";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }else {
    /* dados para configuração perante servidor externo */
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_ajax_mvc";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }
?>
