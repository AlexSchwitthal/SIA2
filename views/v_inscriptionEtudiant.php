  <table>
    <form name="form" method="post" action="index.php?uc=gestionEtudiant&action=ajoutEtudiant">
      <tr>
        <td> Nom : </td>
        <td><input type="text" id="nom" name="nom"> </td>
      </tr>

      <tr>
        <td> Prénom : </td>
        <td><input type="text" id="prenom" name="prenom"> </td>
      </tr>
      
      <tr>
        <td> Sexe : </td>
        <td>
        	<input type="radio" name="sexe" value="homme" checked> Homme
          	<input type="radio" name="sexe" value="femme"> Femme 
        </td>
      </tr>
      
      <tr>
        <td> Date de naissance : </td>
        <td><input type="text" id="ddn" name="ddn"> </td>
      </tr>
      
      <tr>
        <td> Nationnalité : </td>
        <td><input type="text" id="nation" name="nation"> </td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> Etudes / Stage ? </td>
        <td>
        	<input type="radio" name="es" value="stage" checked> Stage
          	<input type="radio" name="es" value="etude"> Études
        </td>
      </tr>
      
      <tr>
        <td> Date d'arrivée à Paris : </td>
        <td><input type="text" id="dap" name="dap"> </td>
      </tr>
      
	  <tr>
        <td> Langue parlée : </td>
        <td><input type="text" id="langue" name="langue"> </td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> Tel : </td>
        <td><input type="text" id="tel" name="tel"> </td>
      </tr>

      <tr>
        <td> E-mail : </td>
        <td><input type="text" id="email" name="email"> </td>
      </tr>
      
      <tr>
        <td>&lrm;</td>
      </tr>
      
      <tr>
        <td> Prise en charge : </td>
        <td>
        	<input type="radio" name="pec" value="yes" checked> Oui 
          	<input type="radio" name="pec" value="no"> Non 
        </td>
      </tr>

      <tr>
        <td>
          <input type="submit" value="Inscription">
          <input type="submit" value="Annuler" onClick="erase();return false;">
        </td>
      </tr>
   </form>
 </table>
 


