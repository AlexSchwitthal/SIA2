<div id="contentPage" class="col-md-9">
	<h2 class="pageTitle">Conversation</h2>
  	<?php echo "<button type=\"button\" onclick=\"window.location='./index.php?uc=gestionEtudiant&action=messagerie';\">Retour à la messagerie</button> " ?>
		<table class="table table-bordered table-responsive table-striped">
			<col style="width:25%">
            <col style="width:75%">
			<thead>
				<td> Expéditeur </td>
				<td> Message </td>
			</thead>
		<?php
			foreach ($laConversation as $message) {
				$expediteur = $pdo->getUserById($message['id_expediteur']);
		?>
			<tr>
			<td> <?php echo $expediteur['username'] ?></td>
			<td> <p style="font-size: 10px"><?php echo $message['date'] ?></p><?php echo $message['texte'] ?></td>
			
			</tr>

			<?php
		}
		?>
		<tr>
			<td colspan="3">
				<form method="post" action="index.php?uc=gestionEtudiant&action=envoyerMessage">
					Nouveau message
					<input type="text" id="message" name="message" size="70">
					<?php echo "<input type=\"hidden\" name=\"dest\"  value=\"{$dest}\">"?>
					<?php echo "<input type=\"hidden\" name=\"expe\"  value=\"{$expe}\">"?>
					<input id="submitBouton" type="submit" value="Envoyer">
				</form>
			</td>
		</tr>
    </table>
</div>
