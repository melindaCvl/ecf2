<?php
	/*fichier appelé par redirections.js
	qui prépare la liste des utilisateurs que la vue va afficher*/
	include('../../../../model/m_fonctions.php');
	$infos_user = recupere_liste_users();
	
	include('../../../../view/utilisateur/admin/usr/v_r_utilisateurs.php');
?>