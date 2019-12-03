<?php
include __DIR__.'/Conexao.php';

class Carro extends Conexao {
    private $placa;
    private $modelo;
    private $cor;
    private $ano;
    private $tipo;
    private $quilometragem;
    private $valordadiaria;
    private $foto;
    

    public function getPlaca() {
        return $this->placa;
    }
    public function setPlaca($placa) {
        $this->placa = $placa;
        return $this;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }
     public function getCor() {
        return $this->cor;
    }
    public function setCor($cor) {
        $this->cor = $cor;
        return $this;
    }
    public function getAno() {
        return $this->ano;
    }
    public function setAno($ano) {
        $this->ano = $ano;
        return $this;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
    public function getQuilometragem() {
        return $this->quilometragem;
    }
    public function setQuilometragem($quilometragem) {
        $this->quilometragem = $quilometragem;
        return $this;
    }
    public function getValorDaDiaria() {
        return $this->valordadiaria;
    }
    public function setValorDaDiaria($valordadiaria) {
        $this->valordadiaria = $valordadiaria;
        return $this;
    }
    public function getFoto() {
        return $this->foto;
    }
    public function setFoto($foto) {
        $this->foto = $foto;
        return $this;
    }

    public function insert($obj){
        $sql = "INSERT INTO carros(placa, modelo, cor, ano, tipo, quilometragem, valordadiaria, foto) VALUES (:placa,:modelo,:cor,:ano,:tipo,:quilometragem,:valordadiaria,:foto)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('placa',  $obj->placa);//bindValue aceita 
        $consulta->bindValue('modelo',  $obj->modelo);    //variaveis etc    
        $consulta->bindValue('cor',  $obj->cor);
        $consulta->bindValue('ano',  $obj->ano);
        $consulta->bindValue('tipo',  $obj->tipo);
        $consulta->bindValue('quilometragem',  $obj->quilometragem);
        $consulta->bindValue('valordadiaria',  $obj->valordadiaria);
        $consulta->bindValue('foto',  $obj->foto);        
        $consulta->execute();
       // return Conexao::lastId();
    }

    public function update($obj,$id = null){
        $sql = "UPDATE carros SET placa = :placa, modelo = :modelo, cor = :cor, ano = :ano, tipo = :tipo, quilometragem = :quilometragem, valordadiaria = :valordadiaria, foto = :foto WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('placa',  $obj->placa);//bindValue aceita 
        $consulta->bindValue('modelo',  $obj->modelo);    //variaveis etc    
        $consulta->bindValue('cor',  $obj->cor);
        $consulta->bindValue('ano',  $obj->ano);
        $consulta->bindValue('tipo',  $obj->tipo);
        $consulta->bindValue('quilometragem',  $obj->quilometragem);
        $consulta->bindValue('valordadiaria',  $obj->valordadiaria);
        $consulta->bindValue('foto',  $obj->foto);
        return $consulta->execute();
    }

    public function delete($obj,$id = null){
        $sql =  "DELETE FROM carros WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function select($id = null){
        $sql =  "SELECT * FROM carros WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function selectAll(){
        $sql = "SELECT * FROM carros";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}

?>