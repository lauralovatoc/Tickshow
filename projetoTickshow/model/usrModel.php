<?php

require_once 'ConexaoMysql.php';

class usrModel {
    
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $telefone;

    public function __construct() {
        //vazio
    }

   //getters e setters
   public function getId() {
       return $this->id;
   }

   public function getNome() {
       return $this->nome;
   }

   public function getEmail() {
       return $this->email;
   }

   public function getSenha() {
       return $this->senha;
   }

   public function getTelefone() {
       return $this->telefone;
   }

   public function setId($id): void {
       $this->id = $id;
   }

   public function setNome($nome): void {
       $this->nome = $nome;
   }

   public function setEmail($email): void {
       $this->email = $email;
   }

   public function setSenha($senha): void {
       $this->senha = $senha;
   }

   public function setTelefone($telefone): void {
       $this->telefone = $telefone;
   }


    //Métodos especialistas
    public function loadAll() {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM usuarios';
        $resultList = $db->Consultar($sql);

        $db->Desconectar();

        return $resultList;
    }

    public function loadById($id) {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM usuarios where id =' . $id;
        $resultList = $db->Consultar($sql);

        //verifica se retornou um registro do database
        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id_usuario = $value['id'];
                $this->nome = $value['nome'];
                $this->email = $value['email'];
                $this->senha = $value['senha'];
                $this->telefone =$value['telefone'];
            }
        }
        $db->Desconectar();

        return $resultList;
    }

    public function insert() {
     
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'INSERT INTO usuarios '
                . 'values(0,"' . $this->nome . '",'
                . $this->email . '",'
                . $this->senha . '",'
                . '"' . $this->telefone . '")';

        $db->Executar($sql);

        $db->Desconectar();

        return $db->total;
    }

    public function update() {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'UPDATE usuarios SET '
                . 'nome="'.$this->nome.'",'
                . 'email="'.$this->email.'",'
                . 'senha="'.$this->senha.'",'
                . 'senha="'.$this->telefone.'",'
                . 'WHERE id = '.$this->id;

        $db->Executar($sql);

        $db->Desconectar();

        return $db->total;
    }
    
    public function delete() {
  
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'DELETE FROM usuarios WHERE id='.$this->id;
      
        $db->Executar($sql);

        $db->Desconectar();

        return $db->total;
    }

    public function login($email,$senha){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = "SELECT * from usuarios where email = '$email' and senha='$senha'";

        $db->Consultar($sql);

        if($db->total>=1){
            @session_start();
            $_SESSION['login'] = $email;

            if(isset($lembrar)){
                if($lembrar == 1){
                    setcookie('email', $email, time() + (86400 * 30), "/"); 
                }
            }else{
                if (isset($_COOKIE['email'])) {
                    //destruir o cookie
                    setcookie("email", "", time()  - (172800 * 30), "/");
                }
            }


            header('location:../home.php');

        } else {
            header('location: ../index.php?cod=171');
        }


        $db->Desconectar();

    }

}

?>