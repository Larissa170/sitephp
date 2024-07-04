<?php 
SESSION_START();
include "verifica_login.php";
include "connect.php";
header('content-type: text/html; charset=utf-8');
$postagem = $_POST['edita_postagem'];
$id_post = $_POST['id_post'];
$cadastrar = false;

if($postagem != "") {
  $cadastrar = true;
} else {
  header("location:user.php");
}

if($cadastrar) {
  $sql = "update tb_postagens set postagem ='$postagem' where id_postagens = $id_post;";
  mysqli_query($link,$sql);
  header("location:user.php?page=2");
} else {
  header("location:user.php");
}

?>