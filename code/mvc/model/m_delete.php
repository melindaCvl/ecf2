<?php

	include('m_dao.class.php');
	/*pour le delete user*/
	function delete_user($login){
		$sql = "DELETE FROM users WHERE login='" . $login . "';";
		$dao = new DAO();
		$dao -> executer($sql);
	}
	
?>