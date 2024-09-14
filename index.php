<?php 
/**
 * Pegando informação da url
 */
  
  if($_GET && isset($_GET["pagina"])){
    $paginaUrl = $_GET['pagina'];
  }else{
    $paginaUrl = null;
  }
  
  include_once("header.php");
  if($paginaUrl === "principal"){
    include_once("body.php");  
  }elseif($paginaUrl === "contato"){
  include_once("contato.php");
  }elseif($paginaUrl === "login"){
  include_once("login.php");
  }elseif($paginaUrl === "registro"){
  include_once("registro.php");
  }else{
  echo "404 Página não existe!";
  }
  include_once("footer.php");
?>