<?php

if ($_POST) {

    require_once '../model/usrModel.php';
    $usr = new usrModel();
    $usr->setNome($_POST['nome']);
    $usr->setEmail($_POST['email']);
    $usr->setSenha($_POST['senha']);
    $usr->setTelefone($_POST['telefone']);

    if(isset($_POST['cadastrar'])){
        $usr->cadastro();
        header('location:../index.php');
    } 
    
} else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {

        require_once '../model/usrModel.php';
        $usr = new usrModel();

    }
} else {
    loadAll();
}

function loadAll() {
    require_once './model/usrModel.php';
    $usr = new usrModel();
    $usrList = $usr->loadAll();

    return $usrList;
}

function loadById($id) {
    require_once './model/usrModel.php';
    $usr = new usrModel();

    $usr->loadById($id);

    return $usr;
}
?>