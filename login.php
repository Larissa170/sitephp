<?php 
include "connect.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

if(isset($login)&& isset($senha)){
  //verifica os dados no banco
  $select = "select * from tb_user where email = '$login'";
  $sql = mysqli_query($link,$select);
  while($dados = mysqli_fetch_array($sql)){
    $email= $dados['email'];
    $pass = $dados['senha'];
  }  
  
  if($login == $email && $senha == $pass){
    SESSION_START();
    $_SESSION['login_user'] = $login;
    $_SESSION['senha_user'] = $senha;
    header('location:user.php');
  } else {
    header('location:index.php');
  }

}else{
  header('location:index.php');
}

?>