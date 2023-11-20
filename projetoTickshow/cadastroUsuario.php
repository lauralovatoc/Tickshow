<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar usuário</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="estiloLoginCadastro.css">
    </head>
    <body>
        <!--<div class="col-md-12" style="padding:0px">
            <img src="" style="width:10%">
        </div>-->

        <br><br><br><br>

        <div class="row">
            <div class="col-md-4"> </div>

            <div class="col-md-4">

                <div class="blocoLogin">
                    <form method="post" action="controller/usrController.php" class="formLogin">

                        <?php
                        if ($_REQUEST) {
                            $cod = $_REQUEST['cod'];
                            if ($cod == 'success') {
                                echo '<div class="alert alert-success">';
                                echo 'Registro inserido com sucesso';
                                echo '</div>';
                            } else if ($cod == 'error') {
                                echo '<div class="alert alert-danger">';
                                echo '<span>Erro:</spam>Ocorreu um erro';
                                echo '</div>';
                            } else if ($cod == 'edit') {
                                require_once './controller/usrController.php';

                                $id = $_REQUEST['id'];
                                $usrObject = loadById($id);
                            }
                        }
                        ?>


                        <h1>Cadastrar-se</h1>
                        <p>Preencha os campos abaixo com seus dados</p>
                        
                        <input type="hidden" name="id" value="<?php echo @(isset($usrObject) ? $usrObject->getId() : '') ?>">
                        
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" value="<?php echo @(isset($usrObject) ? $usrObject->getNome() : '') ?>" name="nome" required="" placeholder="Insira seu nome">
                        
                        <label for="email">Email:</label>
                        <input type="email" id="email" value="<?php echo @(isset($usrObject) ? $usrObject->getEmail() : '') ?>" name="email" required="" placeholder="Insira seu email">
                        
                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" value="<?php echo @(isset($usrObject) ? $usrObject->getTelefone() : '') ?>" name="telefone" required="" placeholder="Insira seu número de telefone">
                        
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" value="<?php echo @(isset($usrObject) ? $usrObject->getSenha() : '') ?>" name="senha" required="" placeholder="Crie uma senha">

                        <input type="submit" class="btn" value="Salvar informações">
                    </form>
                </div>

            </div>

            <div class="col-md-4"></div>


    </body>
</html>
