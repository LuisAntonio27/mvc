<?php
require_once '../database/querys.php';

function get_all_personas() {
    $consulta = "SELECT id, nombre, apellido_paterno FROM personas";
    return get_elements($consulta);
}

function get_all_personas_by_puesto_id($puesto_id) {
    $consulta = "SELECT id, nombre, apellido_paterno FROM personas";
    $consulta .= " where puesto_id = ".$puesto_id;
    return get_elements($consulta);
}

function get_personas_by_id($id) {
    $consulta = "SELECT "
            . "personas.puesto_id, "
            . "personas.nombre, "
            . "personas.apellido_paterno, "
            . "puestos.puesto, "
            . "puestos.salario "
            . "FROM "
            . "personas "
            . "INNER JOIN puestos ON puestos.id = personas.puesto_id "
            . "WHERE personas.id = ".$id;
    return get_element($consulta);
}
?>