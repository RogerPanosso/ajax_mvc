<?php
  /*
  * Definição da class ajaxpessoasController contendo métodos(actions) sendo responsavel
  * por obter controle a requisição ajax realizada tratando dados
  */
  namespace App\Controllers;

  use App\Core\Controller;
  use App\Models\Pessoas;

  class ajaxpessoasController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function salvarCadastro() {
      $pessoa = new Pessoas();
      $dados = array();
      $nome = trim(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
      $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
      $telefone = trim(filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING));
      $endereco = trim(filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING));
      $cidade = trim(filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING));
      $sobre = trim(filter_input(INPUT_POST, "sobre", FILTER_SANITIZE_STRING));
      if($nome and $email and $telefone and $endereco and $cidade and $sobre) {
        if($pessoa->salvarCadastro($nome,$email,$telefone,$endereco,$cidade,$sobre) == true) {
          $dados["retorno"] = "Cadastro de pessoa realizado com sucesso";
          $this->loadView("success", $dados);
        }else {
          $dados["retorno"] = "Não é possível realizar o cadastro. Cadastro já realizado";
          $this->loadView("error", $dados);
        }
      }
    }
  }
?>
