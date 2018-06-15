<?php

include '../../model/plano.model.php';

class PlanoControl {
	function insert($obj){
		$p = new Plano();
		//echo $obj->titulo;
		return $p->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$p = new Plano();
		return $p->update($obj,$id);
	}

	function delete($obj,$id){
		$p = new Plano();
		return $p->delete($obj,$id);
	}

	function find($id = null){

	}

	function todos(){
		$p = new Plano();
		return $p->findAll();
	}
}

?>