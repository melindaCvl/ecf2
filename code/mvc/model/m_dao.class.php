<?php
	
	class DAO{		
		private $connexion;
		
		function __construct(){
			$serveur = "localhost";
			$login = "root";
			$mdPass = "root";
			
			try{
				$this -> connexion = new PDO("mysql:host=$serveur;dbname=genealogie", $login, $mdPass);
				$this -> connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo '<script>console.log("Connexion réussie")</script>';				
			}catch(Exception $e){
				echo '<script>console.log("Echec' . $e -> getMessage() . '");</script>';
			}
		}
		
		public function selectionner($sql){
			try{
				//PREPARATION DE LA REQUETE
				$requete = $this -> connexion -> prepare($sql);
				$requete -> execute();
				$resultat = $requete -> fetchall(PDO::FETCH_ASSOC);
			}catch(Exception $e){
				throw $e;
			}
			return $resultat;
		}
		
		public function executer($sql){
			try{
				$requete = $this -> connexion -> prepare($sql);
				$requete -> execute();
			}catch(Exception $e){
				throw $e;
			}
		}

	}

?>