<?php

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $dadosUsuario = array('email'=>'lauralovato@gmail.com','senha'=>'1234');

    if ($email == $dadosUsuario['email'] && $senha == $dadosUsuario['senha']) {

        session_start(); //iniciando sessão do usuario
        
        $_SESSION['login'] = $email;
        
        if(isset($lembrar)){
            if($lembrar == 1){
                setcookie('email', $email, time() + (86400 * 30), "/"); 
            }
        }else{
            //Se ele não estiver selecionado e o cookie existir...destruo
            if (isset($_COOKIE['email'])) {
                //destruir o cookie
                setcookie("email", "", time()  - (172800 * 30), "/");//cookie válido por dois dias
            }
        }
        
        header('location:../home.php'); //se login correto, manda pro pagina home
        
    } else {
        //senha ou email errados, volta ao index 
        header('location:../index.php?cod=171');
    }
    
} else {
    //caso nao venha dados POST, voltando ao index
    header('location:../index.php');
}
?>



