<?php
  /*
  * Definição do arquivo de Config(configurações) estabelecendo dados em array para obter conexão
  * com servidor MySQL de acordo com ambiente de desenvolvimento estabelecido e utilizado
  */
  require_once "Environment.php";

  $config = array();

  if(ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/ajax_mvc/"); //constante contendo URL base da aplicação
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_ajax_mvc";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }else {
    define("BASE_URL", "http://localhost/ajax_mvc/"); //constante contendo URL base da aplicação
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_ajax_mvc";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }
?>
