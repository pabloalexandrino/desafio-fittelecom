<?php
include '../../control/ConteudoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $p = new PlanoControl();
 $p->insert($obj);
 header('Location:listar.php');
}

?>