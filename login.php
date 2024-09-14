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
  </div>
  <script src="/scripts/temaescuro.js"></script>
  <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</body>

</html>