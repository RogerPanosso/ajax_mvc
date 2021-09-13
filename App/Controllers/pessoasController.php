<?php
  /*
  * Definição da class pessoasController contendo métodos(actions) sendo responsavel
  * por obter controle á página(view) de pessoas
  */
  namespace App\Controllers;

  use App\Core\Controller;

  class pessoasController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->loadTemplate("pessoas");
    }
  }
?>
