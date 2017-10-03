<?php
/**
* @author johnesteban
* @brief Agregar una unidad
**/
		$u = new Unidad();
		
		$continuar = true;
		
		/*
		 * Si el nombre no es nulo y no existe lo cargo
		 */
		if ($_POST["nombre"] != "")
		{
			#if (Unidad::getByName($_POST["nombre"]) != null)
			{
			#	$continuar = false;
			}
		}
		if ($continuar)
		{
			$u->nombre = $_POST["nombre"];
			$u->add();
		}
		else
		{
			Core::alert("El nombre ya esta en uso!");
		}

		Core::redir("./?view=unidades");
?>