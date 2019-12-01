<?php
include __DIR__.'/Conexao.php';

class Cliente extends Conexao {
    private $nome;
    private $rg;
    private $celular;

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getRg() {
        return $this->rg;
    }
    public function setRg($rg) {
        $this->rg = $rg;
        return $this;
    }
     public function getCelular() {
        return $this->celular;
    }
    public function setCelular($celular) {
        $this->celular = $celular;
        return $this;
    }

    public function insert($obj){
        $sql = "INSERT INTO clientes(nome,rg,celular) VALUES (:nome,:rg,:celular)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);//bindValue aceita 
        $consulta->bindValue('rg',  $obj->rg);    //variaveis etc    
        $consulta->bindValue('celular',  $obj->celular);        
        $consulta->execute();
       // return Conexao::lastId();
    }

    public function update($obj,$id = null){
        $sql = "UPDATE clientes SET nome = :nome, rg = :rg, celular = :celular WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('rg', $obj->rg);
        $consulta->bindValue('celular' , $obj->celular);
        $consulta->bindValue('id', $id);
        return $consulta->execute();
    }

    public function delete($obj,$id = null){
        $sql =  "DELETE FROM clientes WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function select($id = null){
        $sql =  "SELECT * FROM clientes WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function selectAll(){
        $sql = "SELECT * FROM clientes";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}

?>