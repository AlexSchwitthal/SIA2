<div class="col-md-12">
  <div class="marge" id="listeNews">
    <p>Catégorie :</p>
    <br>
    <div>
    <?php
    foreach($categories as $categorie) {
      $estActif = estActif($categorie['id'], $_REQUEST);
      ?>
        <button type="button" class="<?php echo $estActif[0] ?>">
          <a href="index.php?uc=accueil&action=affichageNewsRestriction&id=<?php echo $categorie['id'] ?>"
            style="text-decoration: none; color:<?php echo $estActif[1] ?>">
            <?php echo $categorie['nom'] ?></a>
        </button>
      <?php
    }
    $toutesLesNews = toutesLesNews($_REQUEST);
    ?>
    <button type="button" class="<?php echo $toutesLesNews[0] ?>">
      <a href="index.php?uc=accueil&action=affichageNews"
        style="text-decoration: none; color:<?php echo $toutesLesNews[1] ?>">
      Toutes les news</a>
    </button>
    </div>
    <br>

    <div class="bloc" style="height:600px;">
      <span class="paginationTable">
        <?php
        foreach ($lesNews as $news) {
          ?>
          <br>
            <div class = "tableItem" style="height:175px;border:1px solid #000; padding: 10px 0px 0px 10px; overflow:hidden;">
              <?php
              foreach($categoriesDesNews as $categorieDeLaNews) {
                if($news['id'] == $categorieDeLaNews['newsId']) {
                  ?>
                  <button type="button" class="btn btn-sm btn-primary">
                    <a href="index.php?uc=accueil&action=affichageNewsRestriction&id=<?php echo $categorieDeLaNews['categorieId'] ?>"
                      style="text-decoration: none; color:#fff">
                      <?php echo $categorieDeLaNews['nom'] ?>
                    </a>
                  </button>
                  <?php
                }
              }
              ?>
              <br>
              <p>
                <span style="font-size:18px; color:black"><b><u><?php echo $news['titre'] ?></u></b></span><br>
                publié le <?php echo conversionDate($news['datePublication']); ?>
              </p>
              <p>
                <?php echo limitationTaille($news['description'], 500); ?>
              </p>
            </div>
          <?php
        }
        ?>
      </span>
    </div>
    <!-- <ul id="pagination-container">
      <li class = "paginacaoCursor" id="beforePagination"></li>
      <li class = "paginacaoCursor" id="afterPagination"></li>
    </ul> -->
    <!-- <ul class="pagination-container">
      <li class='paginacaoCursor' id="beforePagination"><</li>
      <li class='paginacaoCursor' id="afterPagination">></li>
    </ul> -->
    <div id="pagination-container">
     <p class='paginacaoCursor' id="beforePagination"><</p>
     <p class='paginacaoCursor' id="afterPagination">></p>
    </div>

  </div>
</div>
