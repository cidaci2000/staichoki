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
  <h1> LOGIN!</h1>
    <form action="/pagina-processa-dados-do-form" method="post"> 
      <div  class="E-mail">
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" />
      </div>
      <br>
        <div class="Senha">
          <label for="senha">Senha:</label>
          <input class="senha" type="password">
        </div>
        <br>
        
        <h6>NAO TEM CADASTRO?</h6>
        <a href="cadastro.php"><button type="button">CLIQUE AQUI!</button> </a>
        
        <br>
        <br>
          <a href="URL"><button class="botao">ENVIAR</button></a>
      </form>
    </div>
  </div>
</html>