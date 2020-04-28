
<div class="col-md-12">
  <div class="marge" id="listeNews">
    <p>Catégorie :</p>
    <br>
    <div>
    <?php
    foreach($categories as $categorie) {
      $estActif = estActif($categorie['id'], $_REQUEST);
      ?>

          <a href="index.php?uc=news&action=affichageNewsRestriction&id=<?php echo $categorie['id'] ?>"
            style="text-decoration: none; color:<?php echo $estActif[1] ?>">
              <button type="button" class="<?php echo $estActif[0] ?>"><?php echo $categorie['nom'] ?>
              </button>
          </a>

      <?php
    }
    $toutesLesNews = toutesLesNews($_REQUEST);
    ?>

      <a href="index.php?uc=news&action=affichageNews"
        style="text-decoration: none; color:<?php echo $toutesLesNews[1] ?>">
        <button type="button" class="<?php echo $toutesLesNews[0] ?>">
          Toutes les news
        </button>
      </a>
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

                    <a href="index.php?uc=news&action=affichageNewsRestriction&id=<?php echo $categorieDeLaNews['categorieId'] ?>"
                      style="text-decoration: none; color:#fff">
                        <button type="button" class="btn btn-light-green btn-lg">
                          <?php echo $categorieDeLaNews['nom'] ?>
                        </button>
                    </a>
                  <?php
                }
              }
              ?>
              <br>
              <p>
                <span style="font-size:18px; color:black">
                  <b><u>
                    <a href="index.php?uc=news&action=pageNews&id=<?php echo $news['id'] ?>"
                      style="text-decoration: none; color:#000;">
                      <?php echo $news['titre'] ?>
                    </a>
                  </u></b>
                </span>
                <br>
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
    <div id="pagination-container">
     <p class='paginacaoCursor' id="beforePagination"><</p>
     <p class='paginacaoCursor' id="afterPagination">></p>
    </div>
  </div>
</div>
<link href="./css/mdb.min.css" rel="stylesheet" type="text/css" />
