<?php

	include('m_dao.class.php');
	
	/*pour la connexion*/
	function recupere_infos_users($login, $pwd){
		$sql = "SELECT * FROM users WHERE login='".$login."' AND pwd='".$pwd."' ;";
		$dao = new DAO();
		$infos_login = $dao -> selectionner($sql);
		
		return $infos_login;
	}
	
	/*PARTIE CRUD USER*/
	/*pour le read user*/
	function recupere_liste_users(){
		$sql = "SELECT login, nom, idPersAssoc, typeU FROM users;";
		$dao = new DAO();
		$liste_users = $dao -> selectionner($sql);
		
		return $liste_users;
	}
	
	/*pour le create user*/
	/*cette fonction récupère tous les idPers encore associés à aucun user*/
	/*on récupère également leurs noms*/
	function recupere_idpers_libre(){
		$sql = "SELECT idPers, personnes.prenom, personnes.nom
				FROM personnes LEFT JOIN users
				ON personnes.idPers = users.idPersAssoc
				WHERE idPersAssoc is null;";
		
		$dao = new DAO();
		$liste_id = $dao -> selectionner($sql);
		
		return $liste_id;
	}
	
	/*cette fonction récupère tous les typeU avec leur libellé*/
	function recupere_liste_type_u(){
		$sql = "SELECT * FROM type_user";
		
		$dao = new DAO();
		$liste_type_u = $dao -> selectionner($sql);
		
		return $liste_type_u;
	}
	
	function lancer_create_user($arguments){
		$sql = "INSERT INTO users VALUES" . $arguments;
		$dao = new DAO();
		$dao -> executer($sql);
	}
	
	/*JE FERAI PLUS TARD OK*/

?>