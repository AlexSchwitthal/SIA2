<?php
    echo $erreur;
?>
<div class="col-md-10">
  	<h2><b>Données de l'association</b></h2>
        
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier" />
        <input type="submit" value="Envoyer le fichier" />
    </form>

    <h1>Fichiers enregistrés</h1>


    <div class="marge">
	    <table class="table table-bordered table-responsive table-striped" id="adherentsInscrits">
	      <thead>
	        <tr>
	        	<th> ID </th>
		        <th> Nom </th>
		        <th> Télécharger </th>
	        </tr>
	      </thead>
	      <tbody>
	        <?php
	        	foreach ($fichiersAssociation as $fichier) {
	        ?>
	        <tr>
	        <?php
	            echo '<td><a href="index.php?uc=gestionAdherent&action=donneesAssociation&id='. $fichier['id'] . '">' . $fichier['id'] . '</a></td>';
	         ?>
	         <td> <?php echo $fichier['name'] ?></td>
	         <td> <?php echo '<a href="'.$fichier['file_url'].'">Télécharger '.$fichier['name'].'</a>' ?></td>
	        </tr>
	        <?php
	        	}
	     	?>
	      </tbody>
	    </table>
  	</div>
</div>