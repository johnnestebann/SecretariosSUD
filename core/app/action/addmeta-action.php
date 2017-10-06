<?php
/**
* @author johnesteban
* @brief Agregar una meta de barrio
**/
		$m = new Meta();
		$continuar = true;
		
		if ($continuar)
		{
			$m->fecha = $_POST["fecha"];
			$m->asist_sacr = $_POST["asist_sacr"];
			$m->asist_melq = $_POST["asist_melq"];
			$m->consejo= $_POST["consejo"];
			$m->comite = $_POST["comite"];
			$m->rec_activas = $_POST["rec_activas"];
			$m->rec_vencidas = $_POST["rec_vencidas"];
			$m->orientacion = $_POST["orientacion"];
			$f->visitas = $_POST["visitas"];
			$f->bautismos = $_POST["bautismos"];
			$f->secretario = $_SESSION["user_id"];
			$f->add();
		}
		else
		{
			Core::alert("El correo electronico ya esta en uso!");
		}

		Core::redir("./?view=datos");
?>