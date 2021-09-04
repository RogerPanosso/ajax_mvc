<?php
  /*
  * Definição da class ajaxController contendo métodos(actions) sendo responsavel por
  * obter controle á requisições internas AJAX sendo realizadas e carregando views
  * ou obtendo retornos perante requisições realizadas
  */
  namespace App\Controllers;

  use App\Core\Controller;
  use App\Models\Usuarios;

  class ajaxController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function salvarCadastro() {
      $usuario = new Usuarios();
      $nome = trim(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
      $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
      $senha = trim(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING));
      if($nome == true and $email == true and $senha == true) {
        $hash_senha = password_hash($senha, PASSWORD_DEFAULT);
        if($usuario->salvar($nome, $email, $hash_senha) == true) {
          echo "Usuário cadastrado com sucesso";
        }else {
          echo "Usuário já existente e valido";
        }
      }
    }
  }
?>
