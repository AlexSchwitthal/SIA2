<?php
    echo $erreur;
?>
<div class="col-md-9">
  	<h2><b>Données de l'association</b></h2>
        
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier" id="file"/>
        <label for="file" />Choisir un fichier</label>
        <br>
        <input type="submit" value="Envoyer le fichier" style="padding:5px 15px; 
		    background:#ccc; 
		    border:0 none;
		    cursor:pointer;
		    -webkit-border-radius: 5px;
		    border-radius: 5px; 
		    width: 12em; height: 2em;
		    font-weight: bold;" />
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