<?php

require_once 'ConexaoMysql.php';

class eventosModel{
    public $id;
    public $nome;
    public $img;
    public $categoria_id;
    public $quant_lotes;
    public $valor_Plote;
    public $quant_ing;
    public $acrescentar_valor;


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

    public function getQuant_lotes(){
        return $this->quant_lotes;
    }

    public function getValor_Plote(){
        return $this->valor_Plote;
    }

    public function getQuant_ing(){
        return $this->quant_ing;
    }

    public function getAcrescentar_valor(){
        return $this->acrescentar_valor;
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

    public function setQuant_lotes($quant_lotes){
        $this->quant_lotes = $quant_lotes;
    }

    public function setValor_Plote($valor_Plote){
        $this->valor_Plote =$valor_Plote;
    }

    public function setQuant_ing($quant_ing){
        $this->quant_ing = $quant_ing;
    }

    public function setAcrescentar_valor($acrescentar_valor){
        $this->acrescentar_valor = $acrescentar_valor;
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
        $sql = 'INSERT INTO eventos (nome,quant_ing,valor_Plote,quant_lotes,acrescentar_valor,img,categoria_id) values ('.$this->nome.','.$quant_ing.','.$this->valor_Plote.','.$this->quant_lotes.','.$this->acrescentar_valor.','.$this->img.','.$novidade.')';
        $db->Executar($sql);
        
       header('location:../eventos.php?cod=sucess');
    }
}
?>