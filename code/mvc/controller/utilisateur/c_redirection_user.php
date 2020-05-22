<?php
	$type_user = $_SESSION['type_user'];
	switch($type_user){
		case "A":
			include('mvc/controller/utilisateur/admin/c_accueil.php');
		break;
		case "M":
			include('mvc/controller/utilisateur/membre/c_accueil.php');
		break;
		default:
			include('mvc/view/public/v_accueil.php');
	}
?>