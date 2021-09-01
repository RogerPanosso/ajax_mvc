<?php
  /*
  * Definição da class Controller(auxiliar) sendo uma class Base de acesso para todos os controllers
  * de acessos gerais perante a aplicação ou seja nos que se responsabilizam por realizar o controle
  * de views(pages) e models sendo herdado em seus controllers de acesso para realizar requisições
  * ao usuário final
  */
  namespace App\Core;

  require "../App/Config/Config.php";

  class Controller {
    protected array $dados;

    public function __construct() {
      $this->dados = array();
    }

    public function loadTemplate(string $nomeView, array $dadosModel = array()) {
      $this->dados = $dadosModel; //atribuição de dados vindos da requisição(models)
      require "../App/Views/Parcial/template.php";
    }

    public function loadViewInTemplate(string $nomeView, array $dadosModel = array()) {
      extract($dadosModel); // ou extract($this->dados) atributo no qual contem dados da requisição em array
      require "../App/Views/Pages/".$nomeView.".php";
    }

    public function loadView(string $nomeView, array $dadosModel = array()) {
      extract($dadosModel); // ou extract($this->dados) atributo no qual contem dados da requisição em array
      require "../App/Views/Pages/".$nomeView.".php";
    }
  }
?>
