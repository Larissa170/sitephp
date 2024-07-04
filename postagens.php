<?php
header('content-type: text/html; charset=utf-8');
include "connect.php";
$sql = "select * from tb_postagens where id_user = $id_logado;";
$postagens = mysqli_query($link,$sql);

echo"<h1 class='titulo_post'>Postagens</h1><br>";

while($dados = mysqli_fetch_array($postagens)){
  echo "<p class='posts'>$dados[id_postagens]: $dados[postagem]
  <a href='update_post.php?id_post=$dados[id_postagens]'>Editar</a>
  </p>";
}

?>