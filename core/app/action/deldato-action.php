<?php
/**
 * @author johnnestebann
 * @brief Eliminar un dato
 **/
Fecha::delete($_GET["id"]);
Core::redir("./?view=datos");
?>