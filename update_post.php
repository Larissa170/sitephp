<?php 
SESSION_START();
include "verifica_login.php";
header('content-type: text/html; charset=utf-8');
$id_post = $_GET['id_post'];
?>
<form action="updated_post.php" method="post">
  <label for="edita_postagem">Atualizar: <br><br>
    <input type="hidden" name="id_post" id="id_post" value="<?php echo $id_post; ?> "/>
    <textarea id="edita_postagem" name="edita_postagem" required rows="10" cols="50"></textarea>
    <br><br>
    <input type="submit" value="Atualizar">
  </label>
</form>