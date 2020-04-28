<div class="col-md-10">
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped">
      <tr>
        <td> Contact </td>
        <td> Dernier Message </td>
        <td> Date </td>
        <td> Action </td>
      </tr>
      <?php
      foreach ($lesMessages as $message) {
      	$expe=$pdo->getUserConnecte($_SESSION['logs']);
      	if($expe['id']==$message['id_expediteur']){
      		$FindContact=$message['id_destinataire'];
      	}else{
      		$FindContact=$message['id_expediteur'];
      	}
      	$contact = $pdo->getUserById($FindContact);
        ?>
        <tr>
          <td> <?php echo $contact['username'] ?></td>
          <td> <?php echo $message['texte'] ?></td>
          <td> <?php echo $message['date'] ?></td>
          <td>
          	<?php
          		$dest=$expe['id'];
				$expe=$pdo->getUserConnecte($_SESSION['logs']);
          		echo "<button type=\"button\" onclick=\"window.location='./index.php?uc=gestionEtudiant&action=conversation&id_destinataire={$contact['id']}&id_expediteur={$expe['id']}';\">Afficher la conversation</button> "
          	?>
          	<button type="button" onclick="alert('You pressed the button!')">Effacer</button>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
  </div>
</div>
