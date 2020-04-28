<div class="col-md-12">
    <h2 class="pageTitle"><?php echo $laNews['titre'] ?></h2>
    <div>
      <?php echo $laNews['description'] ?>
    </div>
    <br>
    <div>
      publié le <?php echo conversionDate($laNews['datePublication']); ?>
    </div>

    <br>
    <div>
      <a href="index.php?uc=news"> revenir à la liste des news </a>
</div>
