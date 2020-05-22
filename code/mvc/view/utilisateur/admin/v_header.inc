<header class="header_utilisateur">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark dropdown-menu-right">
		<!-- Brand -->
		<a class="navbar-brand" onclick="accueil_admin()" href="#">Admin</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" onclick="utilisateurs()" id="btn_utilisateurs">Utilisateurs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" onclick="noeuds()">Noeuds</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" onclick="couples()">Couples</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="mvc/controller/utilisateur/c_deconnexion.php">Déconnexion</a>
				</li> 
			</ul>
		</div> 
	</nav>	
</header>
