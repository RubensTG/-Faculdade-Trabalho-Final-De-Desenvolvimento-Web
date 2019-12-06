<?php
include __DIR__.'/../model/Historico.php';

class HistoricoControl{
	function insert($obj){
		$historico = new Historico();
		return $historico->insert($obj);		
	}

	function update($obj,$id){
		$historico = new Historico();
		return $historico->update($obj,$id);
	}

	function delete($obj,$id){
		$historico = new Historico();
		return $historico->delete($obj,$id);
	}

	function select($id = null){
		$historico = new Historico();
		return $historico->select($id);
	}

	function selectAll(){
		$historico = new Historico();
		return $historico->selectAll();
	}
}

?>