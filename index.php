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
  if ($paginaUrl == "principal"){
    include_once("body.php");  
  }else{
  include_once("telateste.php");
}

  include_once("footer.php");
?>