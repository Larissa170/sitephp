<?php 
include "connect.php"; 

//pega conteudo dos campos do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dica = $_POST['dica'];

$cadastrar = false;

//uploads de imagens
$capa = $_FILES['capa']['name'];
$capa_tipo = $_FILES['capa']['type'];
$perfil = $_FILES['perfil'] ['name'];//pega o nome dos arquivos
$perfil_type = $_FILES['perfil']['type'];

if($nome != "" && $email != "" && $senha != "" && $dica != "" && $capa != ""&& $perfil != ""){
 $cadastrar = true;
}else {
  echo "Campos estão vazios";
}

$pasta = "users/".$email;//local pra salvamento das imagens
if (file_exists($pasta)){
  //header("location:cadastre.php"); //volta para pagina de cadastro
  echo "Já possui pasta";
} else {
  mkdir($pasta,0777); //criar pasta
}

if($cadastrar) {
  //inserir os dados no banco
  $sql = "insert into tb_user(nome,email,senha,dica,perfil,capa)
  values('$nome','$email','$senha','$dica','$perfil','$capa');";
  mysqli_query($link,$sql); 
  //salva as fotos em uma pasta
  move_uploaded_file($_FILES['capa']['tmp_name'],$pasta."/".$capa);//users/nomearquivo
  move_uploaded_file($_FILES['perfil']['tmp_name'],$pasta."/".$perfil);
  echo"<br><a href='index.php'>Fazer login</a>";
}
echo"<br><a href='cadastre.php'>Cadastre novo usuário</a>";

?>