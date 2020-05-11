<div id="contentPage" class="col-md-9">
    <h2 class="pageTitle">Messagerie</h2>
    <table class="table table-bordered table-responsive table-striped">
		<col style="width:25%">
		<col style="width:75%">
		<thead>
			<td> Contact </td>
			<td> Dernier Message </td>
		</thead>
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
          <?php
          	$dest=$expe['id'];
			$expe=$pdo->getUserConnecte($_SESSION['logs']);
			echo "<td onclick=\"window.location='./index.php?uc=gestionEtudiant&action=conversation&id_destinataire={$contact['id']}&id_expediteur={$expe['id']}';\"> "
          ?>
			<div style="display: block">
				<p style="font-size: 10px; display: inline-block"><?php echo $message['date'] ?></p>
			</div>
			<?php echo $message['texte'] ?>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
</div>
