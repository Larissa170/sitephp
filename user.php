<?php 
include "verifica_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Criando site php</title>
</head>
<body>
  <section id="principal">
    <section id="topo" style="background-image:url(<?php echo "users/$email_logado/$capa_logado"?>);background-size:cover;">
      <?php include "topo.php"; ?>
    </section>
    <section id="conteudo">
      <?php include "conteudo.php"; ?>
    </section>
    <section id="rodape">
      <?php include "rodape.php"; ?>
    </section>
  </section>
</body>
</html>