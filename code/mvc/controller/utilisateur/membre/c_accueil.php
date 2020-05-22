<?php
	include('mvc/view/utilisateur/membre/v_header.inc');
	/*insérer ici la logique de redirection, stocker le chemin dans une variable*/

	/*switch case contenu */
	/*pour l'instant :*/
	include('mvc/controller/utilisateur/membre/c_infos.php');
	include('mvc/view/utilisateur/membre/v_accueil.php');
	/*faire un include simple du chemin stocké dans la variable*/
	/*include $monChemin*/

	include('mvc/view/v_footer.inc');
?>