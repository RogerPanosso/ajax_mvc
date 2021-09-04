<?php
  /*
  * Definição da class Usuarios(Model) contendo métodos procedimentos específicos sendo responsaveis
  * por tratar regras de negócios perante banco de dados bem como realizando requisições aos dados
  */
  namespace App\Models;

  use App\Core\Model;

  class Usuarios extends Model {

    private function verificaCadastro($email) {
      $query = "SELECT * FROM usuarios WHERE email = :email";
      $query = $this->pdo->prepare($query);
      $query->bindValue(":email", $email);
      $query->execute();
      if($query->rowCount() === 0) {
        return true;
      }else {
        return false;
      }
    }

    public function salvar($nome, $email, $senha) {
      if($this->verificaCadastro($email) == true) {
        $query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,:senha)";
        $query = $this->pdo->prepare($query);
        $query->bindValue(":nome", $nome);
        $query->bindValue(":email", $email);
        $query->bindValue(":senha", $senha);
        $query->execute();
        return true;
      }
    }
  }
?>
