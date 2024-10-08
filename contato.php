<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/temaescuro.css">
    <link rel="stylesheet" href="../CSS/contato.css">
    <link rel="stylesheet" href="../CSS/validacao-contato.css">
    <script src="/scripts/header.js" defer></script>
    <script src="/scripts/contato.js" defer></script>
    
</head>

<body>
    <div class="body-bg">
        <div class="container-body">
            <div class="container">
                <div class="title">
                    <h2>Contate-nos</h2>
                </div>
                <form action="./contato.php">
                    <div class="campos">
                        <div class="input-box">
                            <div class="name">
                            <label for="nome"></label>
                            <input type="text" placeholder="Nome" id="nome" name="nome" >
                            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                        </div>
                        </div>

                        <div class="input-box">
                            <input type="text" id="sobrenome" placeholder="Sobrenome">
                        </div>

                        <div class="input-box">
                            <div class="email">
                            <label for="email"></label>
                            <input type="text" placeholder="Email" id="email" name="email">
                            <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um email válido. Ex:     abc@abc.com</p>
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="telefone">
                            <label for="telefone"></label>
                            <input type="text" placeholder="Telefone" id="telefone" name="telefone">
                            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
                            </div>
                        </div>

                        <div class="input-box">
                            <textarea id="mensagem" placeholder="Digite aqui sua mensagem"></textarea>
                        </div>

                    </div>

                    <div class="button">
                        <button value="Enviar" class="btn-concluir" id="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
            <section class="contacts">
                <h2>Contatos</h2>
            </section>
        </div>
    </div>
    <script src="scripts/temaescuro.js"></script>
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

</body>

</html>
