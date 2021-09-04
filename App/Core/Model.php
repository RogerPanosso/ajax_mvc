<?php
  /*
  * Definição da class Model sendo uma class Base para ser herdada em seus models de acessos
  * a requisições aos dados da aplicação sendo responsaveis pelo tratamento das regras de negócio,
  * obtendo instancia da class PDO(object) para conexão a banco de dados MySQL através de uma composição internamente
  */
  namespace App\Core;

  use App\Config\ConnectMysql;

  class Model {
    protected object $pdo;

    public function __construct() {
      $this->pdo = ConnectMysql::getInstancePdo();
    }
  }
?>
