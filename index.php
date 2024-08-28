<?php   
  $produtos[0] = array(
  "Titulo" => "BOXE",
  "Urlimg" => "imagens/boxe.jpg",
  "Desc" => "Descubra a força interior e a técnica impecável necessáriaspara se destacar no ringue. Desafie-se a superar seus limites físicos e mentais enquanto aprende os segredos deste esporte de combate emocionante.",
  "link" => "http://localhost/Projeto/Html/boxe.php");
  
  $produtos[1] = array(
  "Titulo" => "CROSSFIT",
  "Urlimg" => "imagens/crossfit.jpg",
  "Desc" => "Entre na arena do crossfit e desafie seu corpo em um treinamento intenso e variado que irá transformar sua força,resistência e condicionamento físico. Supere seus limites e alcance novos patamares de desempenho.",
  "link" => "http://localhost/Projeto/Html/crossfit.php") ;

  $produtos[2] = array(          
  "Titulo" => "ESPORTE NA NEVE",
  "Urlimg" => "imagens/esportesNaNeve.jpg",
  "Desc" => "Sinta a adrenalina das montanhas cobertas de neve enquanto desliza pelas encostas em esportes como esqui e snowboard. Prepare-se para a emoção de voar sobre a neve e dominar as pistas.",
  "link" => "http://localhost/Projeto/Html/esportesneve.php");
  
  $produtos[3] = array(
  "Titulo" => "BASQUETE",
  "Urlimg" => "imagens/basquete.jpg",
  "Desc" => "Drible, passe, arremesse! Junte-se ao emocionante mundo do basquete e experimente a empolgação de jogar em equipe, competir em partidas acirradas e fazer cestas incríveis.",
  "link" => "http://localhost/Projeto/Html/basquete.php");

  $produtos[4] = array(
  "Titulo" => "CORRIDA",
  "Urlimg" => "imagens/corrida.jpg",
  "Desc" => "Calce seus tênis e sinta a energia pulsante das corridas. Desafie-se em diferentes distâncias, supere obstáculos e descubra os benefícios incríveis para a saúde e o bem-estar que a corrida proporciona.",
  "link" => "http://localhost/Projeto/Html/corrida.php");
  
  $produtos[5] = array(
  "Titulo" => "SURF",
  "Urlimg" => "imagens/surf.jpg",
  "Desc" => "Sinta a liberdade e a conexão com o mar enquanto desliza pelas ondas no surf. Experimente a emoção de pegar a onda perfeita, domine as técnicas e mergulhe no estilo de vida descontraído e vibrante do surf.",
  "link" => "http://localhost/Projeto/Html/surf.php");

  $produtos[6] = array(
  "Titulo" => "TRILHA",
  "Urlimg" => "imagens/trilha.jpg",
  "Desc" => "Aventure-se pelos caminhos menos percorridos e descubra a beleza da natureza enquanto se desafia em trilhas
emocionantes. Deixe a rotina para trás e explore novos horizontes ao ar livre.",
  "link" => "http://localhost/Projeto/Html/trilha.php");
  
  $produtos[7] = array(
  "Titulo" => "TÊNIS",
  "Urlimg" => "imagens/tenis.jpg",
  "Desc" => "Experimente a elegância e a velocidade do tênis, um esporte que combina habilidade, estratégia e agilidade. Jogue com paixão, vença com classe e desfrute da competição saudável em quadra.",
  "link" => "http://localhost/Projeto/Html/tenis.php");
?>

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

<body>
  <div class="container">
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
    <p class="sectionTitle" id="backToTop">BEM VINDO A INFOSPORTS!</p>
    <p class="sectionDescription">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
      preferido.</p>
     
      <section class="gridContainer">
      <div class="mainContent">  
      <?php foreach($produtos as $pr){
      ?>
      <a class= "pag-link" href = <?=$pr["link"]?>>
        <div class = "categoryCard">
        <img src= <?=$pr["Urlimg"]?> alt="mainCardImg" class="mainCardImg" width=320px         height=180px>
        <p class="mainCategoryCardTitle"><?=$pr["Titulo"]?></p>
        <p class="mainCategoryCardDescription"><?=$pr["Desc"]?></p>
        </div>

      <?php  
      } 
      ?>

      </div>
      <aside class="sidebar">
        <div class="sidebarContent">
          <div class="IMC">
            <p>INDICE DE MASSA CORPORAL (IMC)</p>
            <label for="#peso">Peso (KG)</label>
            <input id="peso" type="text" placeholder="Digite o peso...">
            <label for="#altura">Altura (M)</label>
            <input id="altura" type="text" placeholder="Digite a altura...">
            <button class="btnCalcular">Calcular</button>
      </aside>

    </section>

    <footer class="footer">
      <span>InfoSports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>
  <script src="scripts/imc.js"></script>
  <script src="scripts/temaescuro.js"></script>
  <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</body>

</html>
