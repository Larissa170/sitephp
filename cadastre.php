<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Criando site php</title>
</head>
<body>
  <section id="form">   
      <form action="cadastrar.php" method="post" enctype="multipart/form-data">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" placeholder="Nome" class="entradas"id="nome"/>
      <br>  
      <label for="email">E-mail:</label>
      <input type="email" name="email" placeholder="E-mail" class="entradas"id="email"/>
      <br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" placeholder="Senha" class="entradas"id="senha"/>
      <br>
      <label for="dica">Dica:</label>
      <input type="text"name="dica" placeholder="Dica para a senha"class="entradas" id="dica"/>
      <br>
      <label for="capa">Imagem da capa:</label>
      <input type="file"name="capa" class="entradas" id="capa"/>
      <br>
      <label for="perfil">Imagem do perfil:</label>
      <input type="file"name="perfil" class="entradas" id="perfil"/>
      <br>
      <label><input type="submit" value="Cadastrar" class="bt_form"></label>
      </form>  
      <a href="index.php">Logar</a>
  </section>
</body>
</html>