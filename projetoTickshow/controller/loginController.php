<?php

if($_POST){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    require_once '../model/usrModel.php';
    $usr = new usrModel();
    $total = $usr->login($email, $senha); //retorna 0 ou 1
    
    if($total==1){
        session_start();
        $_SESSION['id'] = $usr->getId();
        $_SESSION['login'] = $usr->getNome();
        header('location:../home.php');
    }else{
        header('location:../index.php?cod=171');
    }  
}

?>

