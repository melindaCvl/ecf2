<table class="table table-striped">
	<thead>
		<tr>
			<th>Login</th>
			<th>Nom</th>
			<th>idPersAssoc</th>
			<th>typeU</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php
		$html = "";
		foreach($infos_user as $un_user){			
			$une_ligne = "<tr>";
			$un_id = $un_user['login'];
			foreach($un_user as $une_information){
				$une_ligne = $une_ligne.'<td>'.$une_information.'</td>';
			}
			$html = $html.$une_ligne;
			
			/*rajout des boutons de modifications et de suppression*/
			$html = $html . "<td><a href='#'><i class='fas fa-pencil-alt imgModifDel'></i></a></td><td>
							<a href='#' data-toggle='modal' data-target='#".$un_id."Suppr'>
								<i class='fas fa-trash-alt imgModifDel'></i>
							</a>
							</td>";
			$html = $html . "</tr>";
			
			/*création du modal de suppression*/
			echo '<div class="modal fade" id="'.$un_id.'Suppr" tabindex="-1" role="dialog" aria-hidden="true">';
			?>
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Meurtre</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
			<?php
			echo "<input type='text' name='id' value='".$un_id."' readonly>";
			
			?>
							<p>Êtes-vous sûr de bien vouloir supprimer ce moune ?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
			<?php
			echo '<button type="button" class="btn btn-primary" onclick="suppr_user('.$un_id.')">Confirmer</button>';
			?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php
			
		}
		echo $html;
	?>
	</tbody>
</table>
<button class="btn btn-primary" id="btn_formulaire_creation" onclick="utilisateur_create()">Créer un utilisateur</button>