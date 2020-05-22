/*PARTIE ADMIN*/
/*menu admin*/
function accueil_admin(){
	$("#content_admin").load("mvc/view/utilisateur/admin/v_accueil.php");
}

function utilisateurs(){
	$("#content_admin").load("mvc/controller/utilisateur/admin/crud_usr/c_r_utilisateurs.php");
}

function noeuds(){
	$("#content_admin").load("mvc/view/utilisateur/admin/per/v_noeuds.php");
}

function couples(){
	$("#content_admin").load("mvc/view/utilisateur/admin/cpl/v_couple.php");
}

/*crud utilisateur*/
/*est appelé lors du clic sur le bouton btn_formulaire_creation
appelle le controller qui génère le formulaire de création*/
function utilisateur_create(){
	alert("what");
	$("#content_admin").load("mvc/controller/utilisateur/admin/crud_usr/c_c_utilisateurs.php");
}

/*est appelé lors du clic sur le bouton btn_lancer_creation (?)
appelle le controller qui génère le formulaire de création
mais avec des paramètres*/
function utilisateur_create(parametres){
	/*parametres = {"id":value}*/
	alert("teuh");
	$("#content_admin").load("mvc/controller/utilisateur/admin/crud_usr/c_c_utilisateurs.php", parametres);
}

/*est apppelé lors de la validation du formulaire
récupère les données saisies*/
function rapatrier_les_datas(){
	//récupération des données du formulaire
	var login = $("#login").val();
	var mot_de_passe = $("#mot_de_passe").val();
	var confirmation = $("#confirmation").val();
	var nom_user = $("#nom_user").val();
	var idPers = $("#idPers").val();
	var typeU = $("#typeU").val();
	
	//je créé l'objet qui contient toutes les données,
	//pour pouvoir passer le tout en paramètres d'un seul coup
	var ensemble_datas = {
		"login" : login,
		"mot_de_passe" : mot_de_passe,
		"nom_user_cre" : nom_user,
		"idPers" : idPers,
		"typeU" : typeU
	};
	
	alert("alors là");
	//on recréé la vue qui contient le formulaire
	utilisateur_create(ensemble_datas);
}

/*function recreer_utilisateur_create(){
	alert("couco");
	self.location.href="../../../../../index.php";
	console.log("meuh");
	$("#btn_utilisateurs").trigger("click");
	console.log("me");
}*/

function suppr_user(idLogin){
	alert("coucou");
	var parametres = {"id" : idLogin};
	$("#content_admin").load("mvc/controller/utilisateur/admin/crud_usr/c_lancer_delete.php", parametres);
}