<?php
include __DIR__.'/Conexao.php';

class Historico extends Conexao {
    private $carro;
    private $cliente;
    private $datainicial;
    private $datafinal;

    public function getcarro() {
        return $this->carro;
    }
    public function setcarro($carro) {
        $this->carro = $carro;
        return $this;
    }
    public function getcliente() {
        return $this->cliente;
    }
    public function setcliente($cliente) {
        $this->cliente = $cliente;
        return $this;
    }
     public function getdatainicial() {
        return $this->datainicial;
    }
    public function setdatainicial($datainicial) {
        $this->datainicial = $datainicial;
        return $this;
    }
    public function getdatafinal() {
        return $this->datafinal;
    }
    public function setdatainicial($datafinal) {
        $this->datafinal = $datafinal;
        return $this;
    }

    public function insert($obj){
        $sql = "INSERT INTO historicos(carro,cliente,datainicial,datafinal) VALUES (:carro,:cliente,:datainicial,:datafinal)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('carro',  $obj->carro);//bindValue aceita 
        $consulta->bindValue('cliente',  $obj->cliente);    //variaveis etc    
        $consulta->bindValue('datainicial',  $obj->datainicial); 
        $consulta->bindValue('datafinal',  $obj->datafinal);        
        $consulta->execute();
       // return Conexao::lastId();
    }

    public function update($obj,$id = null){
        $sql = "UPDATE historicos SET carro = :carro, cliente = :cliente, datainicial = :datainicial, datafinal = :datafinal WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('carro', $obj->carro);
        $consulta->bindValue('cliente', $obj->cliente);
        $consulta->bindValue('datainicial' , $obj->datainicial);
        $consulta->bindValue('datafinal' , $obj->datafinal);
        $consulta->bindValue('id', $id);
        return $consulta->execute();
    }

    public function delete($obj,$id = null){
        $sql =  "DELETE FROM historicos WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function select($id = null){
        $sql =  "SELECT * FROM historico WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function selectAll(){
        $sql = "SELECT * FROM historicos";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}

?>