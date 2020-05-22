<?php
	//on récupère les données potentiellement saisies par l'utilisateur
	if(isset($_POST['identifiant']) && isset($_POST['mot_de_passe'])){
		$identifiant = $_POST['identifiant'];
		$mot_de_passe = $_POST['mot_de_passe'];
		
		$infos_login = recupere_infos_users($identifiant, $mot_de_passe);
		if(count($infos_login) == 0){
			$bonne_identification = false;
		} else {
			$bonne_identification = true;
		}
				
		if($bonne_identification){
			$type_user = $infos_login[0]['typeU'];
			$_SESSION['type_user'] = $type_user;
		}
	}
?>