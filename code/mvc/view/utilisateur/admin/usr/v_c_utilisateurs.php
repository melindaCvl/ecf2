
</br>
</br>
<form method="post" id="formCreation">
	<fieldset>
		<legend>Création d'un nouvel utilisateur</legend>
		<div class="form-group">
			<label for="login">Identifiant</label>
			<input type="text" class="form-control" id="login" placeholder="Entrez l'identifiant" name="login" required>
		</div>
		<div class="form-group">
			<label for="mot_de_passe">Mot de passe</label>
			<input type="password" class="form-control" id="mot_de_passe" placeholder="Entrez le mot de passe" name="mot_de_passe" required>
		</div>
		<div class="form-group">
			<label for="confirmation">Confirmation</label>
			<input type="password" class="form-control" id="confirmation" placeholder="Confirmez le mot de passe" name="confirmation">
		</div>
		<div class="form-group">
			<label for="nom_user">Nom</label>
			<input type="password" class="form-control" id="nom_user" placeholder="Entrez le nom" name="nom_user">
		</div>
		
		<?php
		$html = "<div class='form-group'><label for='idPers'>Id Personne Associée</label>";
		$html = $html . "<select class='form-control' id='idPers' name='idPers'>";
		$html = $html . "<option value='null'>NULL</option>";
		foreach($id_dispo as $un_id){
			$html = $html . "<option value ='".$un_id['idPers']."'>".$un_id['idPers']."</option>";
		}
		$html = $html . "</select></div>";
		echo $html;
		?>
		
		<!--
		<div class="form-group">
			<label for="nomPers">Nom personne</label>
			<input type="text" class="form-control" name="nomPers" id="nomPers" value="test" readonly>
		</div>-->
		
		<?php
			$html = "";
			foreach($liste_type_u as $typeU){
				$html = $html . '<div class="form-group">';
				$html = $html . "<label for='".$typeU['typeU']."'>".$typeU['libTypeU']."</label>";
				$html = $html . " ";
				$html = $html . "<input type='radio' name='typeU' id='".$typeU['typeU']."' value='".$typeU['typeU']."' checked/>";
				$html = $html . "</div>";
			}
			echo $html;
		?>
		
		<button class="btn btn-primary" id="btn_lancer_creation" name="btnCreation" onclick="rapatrier_les_datas()">Créer un utilisateur</button>
	</fieldset>
</form>
<script src="js/remplir_champs.js"></script>
		<!--<div class="form-group">
			<label for="genre">Genre</label>
			<select class="form-control" id="genre" name="genre">
				<option value="vide">Sélectionnez un genre</option>
				<option value="H">H</option>
				<option value="F">F</option>
			</select>
		</div>-->