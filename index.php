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
      <form action="login.php" method="post">
        <label for="login">Login:</label>
        <input type="text"name="login" placeholder="Login"class="entradas" id="login"/>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Senha" class="entradas"id="senha"/>
        <br>
        <label><input type="submit" value="Entrar"></label>
      </form>  
      <a href="cadastre.php">Novo usuário</a>
  </section>
</body>
</html>