<?php
/**
* @author johnesteban
* @brief Agregar un dato semanal
**/
		$f = new Fecha();
		$continuar = true;
		
		if ($continuar)
		{
			$f->fecha = $_POST["fecha"];
			$f->asist_sacr = $_POST["asist_sacr"];
			$f->asist_melq = $_POST["asist_melq"];
			$f->consejo= $_POST["consejo"];
			$f->comite = $_POST["comite"];
			$f->rec_activas = $_POST["rec_activas"];
			$f->rec_vencidas = $_POST["rec_vencidas"];
			$f->orientacion = $_POST["orientacion"];
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