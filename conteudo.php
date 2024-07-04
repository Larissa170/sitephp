<?php
//@$pagina = $_GET['page'];//pega o parametro page
//echo $pagina;

$pagina= isset($_GET['page'])? $_GET['page'] : ""; //verifica se esta setado o valor

if($pagina == 2) {
  include "postagens.php";
} else if($pagina == 3) {
  include "postagem.php";
} else {
  include "perfil.php";
}
?>