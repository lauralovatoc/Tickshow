<?php

require_once 'ConexaoMysql.php';

class eventosModel{
    protected $id;
    protected $nome;
    protected $img;
    protected $categoria_id;

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
}
?>