<?php

if ($_POST) {

    require_once '../model/eventosModel.php';
    $evento = new eventosModel();
    $evento->nome = $_POST['nome'];
    $evento->quant_ing = $_POST['quant_ing'];
    $evento->valor = $_POST['valor'];
    $evento->img = $_POST['img'];

    if(isset($_POST['cadastrarEvento'])){
        $evento->cadastroEvento();
  
    } 
    
} else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {

        require_once '../model/eventosModel.php';
        $evento = new eventosModel();

    }
} else {
    loadAllEventos();
}

function loadAllEventos() {
    require_once './model/eventosModel.php';
    $evento = new eventosModel();
    $eventosList = $evento->loadAllEventos();

    return $eventosList;
}


function loadByCat($categoria_id){
    require_once './model/eventosModel.php';
    $evento = new eventosModel();
    
   $result =  $evento->loadByCat($categoria_id);

    return $result;
}
