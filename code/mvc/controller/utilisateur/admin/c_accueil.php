<?php
	include('mvc/view/utilisateur/admin/v_header.inc');
?>
<div class="row page_admin">
	<?php
		include('mvc/view/utilisateur/admin/v_aside.php');
	?>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id="content_admin">
	<?php
		/*Par défaut, on est dirigés sur la page d'accueil
		on change le contenu avec du ajax*/
		include('mvc/view/utilisateur/admin/v_accueil.php');	
	?>
	</div>
</div>
<?php
	include('mvc/view/v_footer.inc');
?>