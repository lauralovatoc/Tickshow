<?php

require_once 'ConexaoMysql.php';

class eventosModel{
    public $id;
    public $nome;
    public $img;
    public $categoria_id;
    public $valor;
    public $quant_ing;

    public function __construct(){
    //vazio
    }

    //getters
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getImg(){
        return $this->img;
    }

    public function getCategoria_id(){
        return $this->categoria_id;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getQuant_ing(){
        return $this->quant_ing;
    }

    //setters
    public function setId($id): void{
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setImg($img): void {
        $this->img = $img;
    }

    public function setCategoria_id($categoria_id): void{
        $this->categoria_id = $categoria_id;
    }

    public function setValor($valor):void{
        $this->valor =$valor;
    }

    public function setQuant_ing($quant_ing):void{
        $this->quant_ing = $quant_ing;
    }

    //métodos especialistas

    public function loadByCat($categoria_id){
        $db =  new ConexaoMySql();
        $db->Conectar();

        $sql = 'SELECT nome,img FROM eventos WHERE categoria_id ='.$categoria_id;

        $result = $db->Consultar($sql);
        $db->Desconectar();

        return $result;
    }

    public function loadAllEventos(){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM eventos';
        $eventosList = $db->Consultar($sql);

        $db->Desconectar();
        return $eventosList;
    }

    public function cadastroEvento(){
        $db = new ConexaoMysql();
        $db->Conectar();
        $novidade=6;
        $sql = 'INSERT INTO eventos (nome,quant_ing,valor,img,categoria_id) values ('.$this->nome.','.$this->quant_ing.','.$this->valor.','.$this->img.','.$novidade.')';
        $db->Executar($sql);
        
       header('location:../eventos.php?cod=sucess');
    }
}
?>