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

  <title>InfoSports</title>
</head>

<header class="header">
      <a class='logo' href=>InfoSports</a>
      <div class="headerBtnGroup">
        <button class="navBtn"><a href='./Html/login.php'>Login</a></button>
        <button class="navBtn"><a href='./Html/registro.php'>Registro</a></button>
        <button class="navBtn"><a href='./Html/contato.php'>Contato</a></button>
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