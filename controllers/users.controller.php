<?php

class ControllerUsers{

	/*=============================================
	Connexion utilisateur
	=============================================*/
	
	static public function ctrUserLogin(){

		if (isset($_POST["loginUser"])) {
			
			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUser"]) && 
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPass"])) {
				
				$table = 'users';

				$item = 'user';
				$value = $_POST["loginUser"];

				$reponse = UsersModel::MdlShowUsers($table, $item, $value);

				if($reponse["user"] == $_POST["loginUser"] && $reponse["password"] == $_POST["loginPass"]){

					$_SESSION["loggedIn"] = "ok";
				
					echo '<script>

						window.location = "home";

					</script>';

				}else{

					echo '<br><div class="alert alert-danger">Nom utilisateur ou mot de passe errone</div>';

				}
			}
		}
	}
}