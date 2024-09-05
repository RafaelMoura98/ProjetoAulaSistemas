<?php   
function CriarLista(){
  $produtos[0] = array(
  "Titulo" => "BOXE",
  "Urlimg" => "imagens/boxe.jpg",
  "Desc" => "Descubra a força interior e a técnica impecável necessáriaspara se destacar no ringue. Desafie-se a superar seus limites físicos e mentais enquanto aprende os segredos deste esporte de combate emocionante.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/boxe.php");
  
  $produtos[1] = array(
  "Titulo" => "CROSSFIT",
  "Urlimg" => "imagens/crossfit.jpg",
  "Desc" => "Entre na arena do crossfit e desafie seu corpo em um treinamento intenso e variado que irá transformar sua força,resistência e condicionamento físico. Supere seus limites e alcance novos patamares de desempenho.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/crossfit.php");

  $produtos[2] = array(          
  "Titulo" => "ESPORTE NA NEVE",
  "Urlimg" => "imagens/esportesNaNeve.jpg",
  "Desc" => "Sinta a adrenalina das montanhas cobertas de neve enquanto desliza pelas encostas em esportes como esqui e snowboard. Prepare-se para a emoção de voar sobre a neve e dominar as pistas.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/esportesneve.php");
  
  $produtos[3] = array(
  "Titulo" => "BASQUETE",
  "Urlimg" => "imagens/basquete.jpg",
  "Desc" => "Drible, passe, arremesse! Junte-se ao emocionante mundo do basquete e experimente a empolgação de jogar em equipe, competir em partidas acirradas e fazer cestas incríveis.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/basquete.php");

  $produtos[4] = array(
  "Titulo" => "CORRIDA",
  "Urlimg" => "imagens/corrida.jpg",
  "Desc" => "Calce seus tênis e sinta a energia pulsante das corridas. Desafie-se em diferentes distâncias, supere obstáculos e descubra os benefícios incríveis para a saúde e o bem-estar que a corrida proporciona.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/corrida.php");
  
  $produtos[5] = array(
  "Titulo" => "SURF",
  "Urlimg" => "imagens/surf.jpg",
  "Desc" => "Sinta a liberdade e a conexão com o mar enquanto desliza pelas ondas no surf. Experimente a emoção de pegar a onda perfeita, domine as técnicas e mergulhe no estilo de vida descontraído e vibrante do surf.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/surf.php");

  $produtos[6] = array(
  "Titulo" => "TRILHA",
  "Urlimg" => "imagens/trilha.jpg",
  "Desc" => "Aventure-se pelos caminhos menos percorridos e descubra a beleza da natureza enquanto se desafia em trilhas
emocionantes. Deixe a rotina para trás e explore novos horizontes ao ar livre.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/trilha.php");
  
  $produtos[7] = array(
  "Titulo" => "TÊNIS",
  "Urlimg" => "imagens/tenis.jpg",
  "Desc" => "Experimente a elegância e a velocidade do tênis, um esporte que combina habilidade, estratégia e agilidade. Jogue com paixão, vença com classe e desfrute da competição saudável em quadra.",
  "link" => "http://localhost/ProjetoAulaSistemas/Html/tenis.php");

  return $produtos;

};
?>
<?php
  function TimeZone() {
    date_default_timezone_set("America/Recife");
  }
function HoraAtual() {
  return date("h:i:sa");
}
function DataAtual(){
  return date("d/m/y");
}

function reduzirStr($str,$quantidade){
  $tamanho = strlen($str);
  if($str && $tamanho >= $quantidade){
    return substr($str,0,$quantidade)."...";
  }
}
