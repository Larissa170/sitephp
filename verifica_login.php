<?php 
include "connect.php";
//recuperando sessao
SESSION_START();
$log = isset($_SESSION["login_user"]) ? $_SESSION["login_user"] : "";
$sen = isset($_SESSION["senha_user"]) ? $_SESSION["senha_user"] : "";
//echo "login: $log";

if ($log != "" && $sen != "") {
  $select = "select * from tb_user where email = '$log'";
  $dados = mysqli_query($link,$select); 
  while($d = mysqli_fetch_array($dados)){
    $nome_logado = $d['nome'];
    $email_logado = $d['email'];
    $senha_logado = $d['senha'];
    $dica_logado = $d['dica'];
    $capa_logado = $d['capa'];
    $perfil_logado = $d['perfil'];
  }
} else {
  header("location:index.php");
}
?>