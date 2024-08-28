<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="../CSS/header.css">
  <link rel="stylesheet" href="../CSS/footer.css">
  <link rel="stylesheet" href="../CSS/temaescuro.css">
  <link rel="stylesheet" href="../CSS/validacao.css">


  <script src="/scripts/header.js" defer></script>
  <script src="/scripts/validacao.js" defer></script>

</head>

<body>
  <div class="container">
    <header class="header">
      <a class='logo' href='https://localhost/ProjetoAulaSistemas'>InfoSports</a>
      <div class="headerBtnGroup">
        <button class="navBtn"><a href='https://localhost/ProjetoAulaSistemas/Html/login.php'>Login</a></button>
        <button class="navBtn"><a href='https://localhost/ProjetoAulaSistemas/Html/registro.php'>Registro</a></button>
        <button class="navBtn"><a href='https://localhost/ProjetoAulaSistemas/Html/contato.php'>Contato</a></button>
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
    <section>
      <div class="box-content">
        <form action="">
          <h1>Faça o seu Login</h1>
          <div class="email">
            <label for="email"></label>
            <input type="text" placeholder="Email" id="email" name="email">
            <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um email válido. Ex: abc@abc.com</p>
          </div>
          <div class="telefone">
            <label for="telefone"></label>
            <input type="text" placeholder="Telefone" id="telefone" name="telefone">
            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
          </div>
          <button class="btn-concluir">Concluir</button>

        </form>
      </div>
    </section>
    <footer class="footer">
      <span>InfoSports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>
  <script src="/scripts/temaescuro.js"></script>
  <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</body>

</html>