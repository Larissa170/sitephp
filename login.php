<?php 
include "connect.php";

SESSION_START();
$login = $_POST['login'];
$senha = $_POST['senha'];

$_SESSION['login_user'] = $login;
$_SESSION['senha_user'] = $senha;

if(isset($_SESSION['login_user']) 
  && isset($_SESSION['senha_user'])
){
  //verifica os dados no banco
  $select = "select * from tb_user where email = '$login'";
  $sql = mysqli_query($link,$select);
  while($dados = mysqli_fetch_array($sql)){
    $email= $dados['email'];
    $pass = $dados['senha'];
  }  
  if($login == $email && $senha == $pass){
    header('location:user.php');
  } else {
    header('location:index.php');
  }

}else{
  header('location:index.php');
}

?>