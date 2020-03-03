<?php
  include 'bdClass.php';

  $con = new BancoDeDados('localhost', 'acaodire_teste', 'teste123@php', 'acaodire_teste');

  $nome = isset($_POST['nome']) ? strip_tags(trim($_POST["nome"])) : "";
  $email = isset($_POST['email']) ? strip_tags(trim($_POST["email"])) : "";
  $telefone = isset($_POST['telefone']) ? strip_tags(trim($_POST["telefone"])) : "";

  if($nome !== "" && $email !== "" && $telefone !== "") {
    $con->inserirDados($nome, $email, $telefone);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <title>Teste Programador PHP</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-7 mx-auto my-5">
        <form method="post">
          <div class="form-row">
            <div class="col-12 mb-3">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="col-12 mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="col-12 mb-3">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary ml-1 mt-3">Enviar</button>
          </div>
        </form>
      </div>
      <div class="col-7 mx-auto my-5">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Telefone</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $letraAtualQtd = 0;

              foreach($con->mostrarDados() as $dados) {
                if(isset($letraAtual) && strtoupper($dados['nome'][0]) !== $letraAtual) {
                  $letraAtualQtd = 0;
                }

                if($letraAtualQtd === 0) {
                  $letraAtual = strtoupper($dados['nome'][0]);
                  $letraAtualQtd++;
                  
                  print <<<MOSTRARDADOSLETRA
                    <tr class="bg-primary text-white">
                      <td colspan="3">$letraAtual</th>
                    </tr>
                  MOSTRARDADOSLETRA;
                }

                print <<<MOSTRARDADOS
                <tr>
                  <td>$dados[nome]</td>
                  <td>$dados[email]</td>
                  <td>$dados[telefone]</td>
                </tr>
                MOSTRARDADOS;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>