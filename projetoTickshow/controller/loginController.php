<?php

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    if(isset($_POST['login'])){
        require_once '../model/usrModel.php';
        $usr =  new usrModel();

        $usr->login($email,$senha);
        header('location:..home.php');
    }

} else {
    header('location:../index.php');
}
?>




