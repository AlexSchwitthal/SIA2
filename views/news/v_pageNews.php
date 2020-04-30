<div id="contentPage" class="col-md-12">
    <div style="margin-top: 20px;margin-left: 30px">
        <a href="index.php?uc=news"> Retour à la liste des news </a>
    </div>
    <div style="width:70%; margin-left:auto; margin-right: auto; margin-top: 20px;background-color:green; padding-top: 15px; padding-bottom: 30px; padding-left: 25px;padding-right:25px; text-align:justify; background-color: #f9f4db; min-height: 600px;">
        <h2 class="pageTitle"><?php echo $laNews['titre'] ?></h2>
        <div>
            publié le <?php echo conversionDate($laNews['datePublication']); ?>
        </div>
        </br>
        <div>
            <?php echo $laNews['description'] ?>
        </div>
    </div>
</div>
