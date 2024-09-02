<body>
  <div class="container">
    <p class="sectionTitle" id="backToTop">BEM VINDO A INFOSPORTS!</p>
    <p class="sectionDescription">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
      preferido.</p>
     
      <section class="gridContainer">
      <div class="mainContent">  
      <?php 
      $produtos = CriarLista();
      foreach($produtos as $pr){
        ?>
        <a class= "pag-link" href = <?=$pr["link"]?>>
          <div class = "categoryCard">
          <img src= <?=$pr["Urlimg"]?> alt="mainCardImg" class="mainCardImg" width=320px  height=180px>
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

  </div>
  <script src="scripts/imc.js"></script>
  <script src="scripts/temaescuro.js"></script>
  <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</body>