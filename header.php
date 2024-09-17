<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/index.css">
  <link rel="stylesheet" href="./CSS/header.css">
  <link rel="stylesheet" href="./CSS/footer.css">
  <link rel="stylesheet" href="./CSS/temaescuro.css">
  <script src="scripts/header.js" defer></script>
  <script src="scripts/imc.js" defer></script>
  <script src="scripts/temaescuro.js" defer></script>
  
  <?php if($paginaUrl === "contato"){?>
    <link rel="stylesheet" href="./CSS/contato.css">
    <link rel="stylesheet" href="./CSS/validacao-contato.css">
  <?php }elseif($paginaUrl === "registro"){?>
    <link rel="stylesheet" href="./CSS/registro.css">
    <link rel="stylesheet" href="./CSS/validacao.css">
  <?php }elseif($paginaUrl === "login"){?>
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/validacao.css">
  <?php }else?>

<title>InfoSports</title>
</head>
<header class="header">
      <a class="logo" href='https://localhost/ProjetoAulaSistemas/?pagina=principal'>InfoSports</a>
        <div class="headerBtnGroup">
        <?php include_once("TopMenu.php");?>
          <div>
            <input type="checkbox" class="check" id="chk"/>
            <label class="label" for="chk">
              <i class="fas fa-moon"></i>
              <i class="fas fa-sun"></i>
              <div class="bola"></div>
            </label>
          </div>
        </div>
        <div class="hamburguer-menu">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
  </header>
<?php
 include_once("functions.php")
?>