<header>
  <h1><?php echo $nome_logado?></h1>
</header>
<figure>
  <img src="<?php echo "users/$email_logado/$perfil_logado";?>">
</figure>
<nav>
  <ul id="foto">
    <li>
      <img src="imagens/camera.png" id="camera"/>
      <ul id="itens_menu">
        <li><a href="upload_foto.php">Upload de foto</a></li>
        <li><a href="remover_foto.php">Remover foto</a></li>
      </ul>
    </li>
  </ul>
</nav>
<section id="menu_perfil">
  <a href="index.php?page=1"> Sobre </a>
  <a href="index.php?page=2"> Atividades </a>
  <a href="logout.php">Sair</a>
</section>

