<?php
  /*
  * Definição da class ConnectMysql contendo conexão com servidor MySQL através da class PDO(object)
  * utilizando padrão de projeto criacional Singleton(contendo instancia unica de objeto) perante
  * aplicação sendo criada e disponibilizada uma unica instancia(objeto) da class PDO para a aplicação.
  * sendo assim a instancia ocorrera em um contexto interno a propria classe através de um metodo
  * estatico
  */
  namespace App\Config;

  class ConnectMysql {
    private static ?\PDO $instancePdo = null;

    private function __construct(){}
    private function __destruct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstancePdo() : \PDO {
      if(!isset(self::$instancePdo) and self::$instancePdo === null) {
        require "Config.php";
        self::$instancePdo = new \PDO($config["dbdriver"].":dbname=".$config["dbname"].";host=".$config["dbhost"], $config["dbuser"], $config["dbpass"]);
        self::$instancePdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        self::$instancePdo->setAttribute(\PDO::ATTR_ORACLE_NULLS, \PDO::NULL_EMPTY_STRING);
      }
      //caso já exista uma instancia(objeto) PDO criada e armazenada em atributo estatico somente retorna
      return self::$instancePdo;
    }
  }
?>
