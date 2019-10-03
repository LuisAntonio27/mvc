<?php
require_once '../models/personas_model.php';
require_once '../models/puestos_model.php';


$puestos = get_all_puestos();

if (isset($_GET['puesto']) && $_GET['puesto'] !== '0') {
    $personas = get_all_personas_by_puesto_id($_GET['puesto']);
    $puesto_id = $_GET['puesto'];
} else{
    $personas = get_all_personas();
    $puesto_id = 0;
}

require_once '../views/personas_view.php';
?>