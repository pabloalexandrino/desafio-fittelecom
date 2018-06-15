<?php
include '../../control/plano.control.php';

$p = new PlanoControl();

header('Content-Type: application/json');

print json_encode($p->todos());


?>