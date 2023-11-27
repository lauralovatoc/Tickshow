<?php
if($_POST){
    require_once '../model/usrModel.php';

    $email_registrado = $_POST['email'];
    $senha_registrada = $_POST['senha'];
    
    $usr =  new usrModel();
    $usr->cadastro($email_registrado,$senha_registrada);
}