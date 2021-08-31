<?php
  /*
  * Definição da class Core(auxiliar) sendo responsavel por startar e iniciar funcionamento da estrutura
  * MVC diante a URL amigavel perante a aplicação. Sendo responsavel por receber dados após dominio raiz
  * da aplicação(url) como classController/metodo(action)/parametros para realizar as devidas requisições
  * ao usuário final
  */
  namespace App\Core;

  class Core {

    public function __construct() {
      $this->run();
    }

    public function run() {
      if(isset($_REQUEST["url"]) and !empty($_REQUEST["url"]) and is_string($_REQUEST["url"])) {
        $url = $_REQUEST["url"];
      }

      if(!empty($url) and $url != "") {
        $url = explode("/", filter_var($url, FILTER_SANITIZE_STRING));
        $controller = $url[0]."Controller";
        array_shift($url);

        if(isset($url[0]) and !empty($url[0]) and is_string($url[0])) {
          $method = $url[0];
          array_shift($url);
        }else {
          $method = "index";
        }

        $params = array();
        if(count($url) > 0) {
          $params = $url;
        }
      }else {
        $controller = "homeController";
        $method = "index";
        $params = array();
      }

      //define estrutrura de namespace(dir) para controllers para autoloader
      $controller = "App\\Controllers\\".$controller;

      //define caminho exato(dir) contendo controller acessado perante aplicação
      $caminho_controller = "ajax_mvc/App/Controllers/".$controller.".php";

      //verifica se controller acessado perante a aplicação não é existente e se action(metodo) não pertence para obter acesso
      //de erro interno perante a aplicação(404)
      if(!file_exists($caminho_controller) and !method_exists($controller, $method)) {
        $controller = "App\\Controllers\\notfoundController";
        $method = "index";
        $params = array();
      }

      //realiza instancia(objeto) do controller requisitado perante a aplicação acessando sua action(metodo) contendo seus
      //devidos para parametros para execução
      $objeto_controller = new $controller();
      call_user_func_array(array($objeto_controller, $method), $params);
    }
  }
?>
