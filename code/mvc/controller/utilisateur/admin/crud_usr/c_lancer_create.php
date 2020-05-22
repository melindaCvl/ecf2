<?php
	/*fichier qui effectue l'insertion dans la BDD*/
	include('../../../../model/m_fonctions.php');
	
	/* je récupère les données passées en post
	et je rajoute directement des guillemets aux données de type VARCHAR
	pour faciliter l'insertion dans la BDD*/
	$login = $_POST['login'];
	$login = "'".$login."'";
	$mot_de_passe = $_POST['mot_de_passe'];
	$mot_de_passe = "'".$mot_de_passe."'";
	$typeU = $_POST['typeU'];
	$typeU = "'".$typeU."'";
	
	$nom = "null";
	$id_pers = "null";
	
	if(isset($_POST['nom_user_cre'])){
		if(strcmp($_POST['nom_user_cre'], "") != 0){
			$nom = $_POST['nom_user_cre'];
			$nom = "'".$nom."'";	
		}
	}
	
	if(isset($_POST['idPers'])){
		if(strcmp($_POST['idPers'], "null") != 0){
			$id_pers = $_POST['idPers'];	
		}
	}
	
	/*lancement de la requete*/
	$arguments = "(".$login.", ".$mot_de_passe.", ".$nom.", ".$id_pers.", ".$typeU.");";
	try{
		lancer_create_user($arguments);
	} catch (PDOException $exc){}
	
	header("Location:../../../../../index.php");
	exit();
?>