<?php
include __DIR__.'/../model/Carro.php';

class CarroControl{
	function insert($obj){
		$carro = new Carro();
		return $carro->insert($obj);		
	}

	function update($obj,$id){
		$carro = new Carro();
		return $carro->update($obj,$id);
	}

	function delete($obj,$id){
		$carro = new Carro();
		return $carro->delete($obj,$id);
	}

	function select($id = null){
		$carro = new Carro();
		return $carro->select($id);
	}

	function selectAll(){
		$carro = new Carro();
		return $carro->selectAll();
	}
}

?>