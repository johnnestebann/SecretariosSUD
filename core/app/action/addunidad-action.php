<?php
/**
* @author johnesteban
* @brief Agregar una unidad
**/
		$p = new Unidad();
		
		$continuar = true;
		
		if ($_POST["nombre"] != "")
		{
			if (Unidad::getByName($_POST["nombre"])!=null)
			{
				$continuar=false;
			}
		}
		if ($continuar)
		{
			$p->nombre = $_POST["nombre"];
		}
		else
		{
			Core::alert("El nombre ya esta en uso!");
		}

		Core::redir("./?view=unidades");
?>