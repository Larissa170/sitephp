<?php 
SESSION_START();
include "verifica_login.php";
include "connect.php";
$postagem = $_POST['postagem'];
$cadastrar = false;

if($postagem != "") {
  $cadastrar = true;
} else {
  echo "Campo está vazio";
}

if($cadastrar) {
  $sql = "insert into tb_postagens(postagem, id_user)
  values('$postagem','$id_logado');";
  mysqli_query($link,$sql);
  echo"<br><a href='user.php?page=3'>voltar</a>";
} else {
  header("location:user.php");
}

?>