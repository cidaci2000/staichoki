<?php
 include("conexao.php");

        $nomecliente = $_POST['nomecliente'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
      

        $sql = "INSERT INTO cliente(nomecliente,cpf,endereco,telefone,celular,email,senha) 
        VALUES('$nomecliente','$cpf','$endereco','$telefone','$celular','$email','$senha')";
    
if(mysqli_query($conexao, $sql)){
    echo "Usuario cadastrado com sucesso";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="estilo.css">
   
<body>
  
  <div class="formulario">
    <div class="caixa">
  <h1> CADASTRE-SE!</h1>
  <form action="cadastro.php" method="post">
  <div class="nomecliente">
    <label for="nomecliente">Nome do cliente:</label>
    <input type="text" id="nomecliente" name="nomecliente" required>
  </div>

  <div class="cpf">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required>
  </div>

  <div class="endereco">
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>
  </div>

  <div class="telefone">
    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone">
  </div>

  <div class="celular">
    <label for="celular">Celular:</label>
    <input type="text" id="celular" name="celular" required>
  </div>

  <div class="email">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>

  <div class="senha">
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
  </div>

  <button type="submit" 
 class="botao">ENVIAR</button>
</form>
    </div>
  </div>
</html>