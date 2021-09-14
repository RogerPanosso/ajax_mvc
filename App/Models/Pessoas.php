<?php
  /*
  * Definição da class Pessoas(Model) contendo métodos procedimentos específicos sendo responsaveis
  * por tratar regras de negócios perante banco de dados bem como realizando requisições aos dados
  */
  namespace App\Models;

  use App\Core\Model;

  class Pessoas extends Model {

    private function verificaCadastro($email, $telefone) {
      $query = "SELECT * FROM pessoas WHERE email = :email and telefone = :telefone";
      $query = $this->pdo->prepare($query);
      $query->bindValue(":email", $email);
      $query->bindValue(":telefone", $telefone);
      $query->execute();
      if($query->rowCount() === 0) {
        return true;
      }else {
        return false;
      }
    }

    public function salvarCadastro($nome, $email, $telefone, $endereco, $cidade, $sobre) {
      if($this->verificaCadastro($email, $telefone) == true) {
        $query = "INSERT INTO pessoas (nome,email,telefone,endereco,cidade,sobre) VALUES (:nome,:email,:telefone,:endereco,:cidade,:sobre)";
        $query = $this->pdo->prepare($query);
        $query->bindValue(":nome", $nome);
        $query->bindValue(":email", $email);
        $query->bindValue(":telefone", $telefone);
        $query->bindValue(":endereco", $endereco);
        $query->bindValue(":cidade", $cidade);
        $query->bindValue(":sobre", $sobre);
        $query->execute();
        return true;
      }
    }
  }
?>
