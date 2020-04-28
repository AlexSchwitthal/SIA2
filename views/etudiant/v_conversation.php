<div class="col-md-10">
  <div class="marge">
  	<?php echo "<button type=\"button\" onclick=\"window.location='./index.php?uc=gestionEtudiant&action=messagerie';\">Retour à la messagerie</button> " ?>
    <table class="table table-bordered table-responsive table-striped">
      <tr>
      	<td> Expéditeur </td>
        <td> Message </td>
        <td> Date </td>
      </tr>
      <?php
      foreach ($laConversation as $message) {
      	$expediteur = $pdo->getUserById($message['id_expediteur']);
        ?>
        <tr>
          <td> <?php echo $expediteur['username'] ?></td>
          <td> <?php echo $message['texte'] ?></td>
          <td> <?php echo $message['date'] ?></td>
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
        		<input type="submit" value="Envoyer"> 
        	</form> 
        </td>
        </tr>
    </table>
  </div>
</div>
