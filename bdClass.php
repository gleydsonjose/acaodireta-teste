<?php
class BancoDeDados {
  private $conMysqli;

  public function __construct($host, $usuario, $senha, $nomeDoBancoDeDados) {
    $this->conMysqli = new mysqli($host, $usuario, $senha, $nomeDoBancoDeDados);

    if ($this->conMysqli -> connect_errno) {
      printf('Houve um erro com a conexão: %s', $this->conMysqli -> connect_error);
      exit();
    }
  }

  public function inserirDados($nome, $email, $telefone) {
    $this->conMysqli->query("INSERT INTO cadastros (nome, email, telefone) VALUES('$nome', '$email', '$telefone')");
  }

  public function mostrarDados() {
    $sql = $this->conMysqli->query('SELECT * FROM cadastros ORDER BY nome');
    return $sql->fetch_all(MYSQLI_ASSOC);
  }
}