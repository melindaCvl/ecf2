<?php
	/*fichier appelé par redirections.js
	qui prépare les jcombobox idPers et typeU que la vue va afficher
	et affiche la vue*/
	include('../../../../model/m_fonctions.php');
	
	/* if isset données passées en POST
	 alors lancer la création avec en appelant le controller c_lancer_create.php
	*/
	
	if(isset($_POST['login'])){
		echo $_POST['login'];
	} else {
		echo "coucou";
	}
	
	/*préparation des jcombobox*/
	$id_dispo = recupere_idpers_libre();
	$liste_type_u = recupere_liste_type_u();
	
	/*if(isset($_POST["id"])){
		echo "coucou";
		echo $_POST['id'];
	}*/
	include('../../../../view/utilisateur/admin/usr/v_c_utilisateurs.php');
	
?>