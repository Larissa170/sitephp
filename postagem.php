<?php 
header('content-type: text/html; charset=utf-8');
include "verifica_login.php";
?>
<form action="postar.php" method="post">
  <label for="postagem">Postagem: <br><br>
    <textarea id="postagem" name="postagem" required rows="10" cols="50"></textarea>
    <br><br>
    <input type="submit" value="Publicar">
  </label>
</form>
      
