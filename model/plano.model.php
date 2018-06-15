<?php
include '../../model/conexao.model.php';

class Plano extends Conexao {
  
	  private $id;
    private $titulo;
    private $up;
    private $down;
    private $valor;

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getUp() {
        return $this->up;
    }

    function getDown() {
        return $this->down;
    }

    function getValor() {
        return $this->valor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setUp($up) {
        $this->up = $up;
    }

    function setDown($down) {
        $this->down = $down;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    
    public function insert($obj){
    	$sql = "INSERT INTO planos (nome,up,down,valor) VALUES (:nome,:up,:down,:valor)";
    	$bd = Conexao::prepare($sql);
      $bd->bindValue('nome',  $obj->titulo);
      $bd->bindValue('up', $obj->up);
      $bd->bindValue('down' , $obj->down);
      $bd->bindValue('valor' , $obj->valor);
    	return $bd->execute();

	}

	public function update($obj,$id = null){
    $sql = "UPDATE planos SET nome = :nome, up = :up,down = :down, valor = :valor WHERE id = :id ";
    $bd = Conexao::prepare($sql);
    $bd->bindValue('nome',  $obj->titulo);
    $bd->bindValue('up', $obj->up);
    $bd->bindValue('down' , $obj->down);
    $bd->bindValue('valor' , $obj->valor);
    $bd->bindValue('id', $id);
    return $bd->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM planos WHERE id = :id";
		$bd = Conexao::prepare($sql);
		$bd->bindValue('id',$id);
		$bd->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM planos";
		$bd = Conexao::prepare($sql);
		$bd->execute();
		return $bd->fetchAll();
	}
}

?>