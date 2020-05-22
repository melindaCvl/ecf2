<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>moulinsart</title>
		<meta charset="utf-8">
		<script src="assets/fontawesome-all.js"></script>
		
		<!-- bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!--jquery -->
		<script src="assets/jquery-3.2.1.min.js"></script>
		
		<!-- mon css -->
		<link rel="stylesheet" type="text/css" href="mvc/view/css/style.css"/>
		<link rel="stylesheet" media="screen and (max-device-width: 992px)" href="mvc/view/css/style_moyen.css"/>
		<link rel="stylesheet" media="screen and (max-width: 992px)" href="mvc/view/css/style_moyen.css"/>
		<link rel="stylesheet" media="screen and (max-device-width: 768px)" href="mvc/view/css/style_petit.css"/>
		<link rel="stylesheet" media="screen and (max-width: 768px)" href="mvc/view/css/style_petit.css"/>
	    <link href="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
		
		<!-- mon script -->
		<script src="js/redirections.js"></script>
	</head>
	<body>
		<div class="container">
		<?php
			include('mvc/model/m_fonctions.php');
			
			//vérifie si des données sont arrivées en post,
			//si c'est le cas vérifie leur cohérence
			//et si les identifiants sont bons, agit sur la variable $_SESSION
			include('mvc/controller/public/c_login.php');
			
			//on redirige vers un controller en fonction du type d'user
			if(isset($_SESSION['type_user'])){
				include('mvc/controller/utilisateur/c_redirection_user.php');
			} else {
				include('mvc/view/public/v_accueil.php');
			}

		?>
		</div>
	</body>
</html>