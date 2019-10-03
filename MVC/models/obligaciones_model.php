<?php
require_once '../database/querys.php';

function get_all_obligaciones_by_id($id) {
    $consulta = "SELECT "
            . "obligaciones.obligacion "
            . "FROM puestos "
            . "INNER JOIN obligaciones ON "
            . "puestos.id = obligaciones.id "
            . "WHERE puestos.id = ".$id;
    return get_elements($consulta);
}

?>