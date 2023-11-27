<?php

if ($_POST) {
    require_once '../model/usrModel.php';
    $usr = new usrModel();
    $usr->setNome($_POST['nome']);
    $usr->setEmail($_POST['email']);
    $usr->setSenha($_POST['senha']);
    $usr->setTelefone($_POST['telefone']);

    $usr->setId($_POST['id']); 

    if ($total == 1) {
        if (empty($usr->getId_usuario())) {
            header('location:../cadastrarUsuario.php?cod=success');
        } else {
            header('location:../listarUsuario.php?cod=success');
        }
    } else {
        header('location:../cadastrarUsuario.php?cod=error');
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