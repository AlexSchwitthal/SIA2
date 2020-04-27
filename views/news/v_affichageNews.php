<div class="col-md-10">
  <div class="marge">
    <p>Catégorie :</p>
    <br>
    <div>
    <?php
    foreach($categories as $categorie) {
      ?>
      <button type="button" class="btn btn-sm btn-primary"><?php echo $categorie['nom'] ?></button>
      <?php
    }
    ?>
    <button type="button" class="btn btn-sm btn-primary">toutes les news</button>
    </div>
    <br>

    <?php
    foreach ($lesNews as $news) {
      ?>
      <br>
      <div style="height:175px;border:1px solid #000; padding: 10px 0px 0px 10px; overflow:hidden;">
        <?php
        foreach($categoriesDesNews as $categorieDeLaNews) {
          if($news['id'] == $categorieDeLaNews['newsId']) {
            ?>
            <button type="button" class="btn btn-sm btn-primary"><?php echo $categorieDeLaNews['nom'] ?></button>
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

  </div>
</div>
