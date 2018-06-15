<?php
include '../../control/plano.control.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $p = new PlanoControl();
 $p->delete($obj,$id);
 header('Location:listar.php');
}







?>