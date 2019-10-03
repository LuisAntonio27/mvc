<?php
require_once '../database/querys.php';

function get_all_puestos() {
    $consulta = "SELECT id, puesto FROM puestos";
    return get_elements($consulta);
}

?>