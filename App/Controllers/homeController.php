<?php
  /*
  * Definição da class homeController contendo metodos(actions) sendo responsavel por
  * obter controle á página(view) home da aplicação sendo acessada por padrão
  */
  namespace App\Controllers;

  use App\Core\Controller;

  class homeController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->loadTemplate("home");
    }
  }
?>
