<?php
require_once '../models/personas_model.php';
require_once '../models/obligaciones_model.php';

if (isset($_GET['id']) && $_GET['id'] !== '') {
    $persona = get_personas_by_id($_GET['id']);
    $obligaciones = get_all_obligaciones_by_id($persona['puesto_id']);
}
require_once '../views/persona_view.php';
?>