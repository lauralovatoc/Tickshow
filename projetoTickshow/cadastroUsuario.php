<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar usuário</title>

        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="estiloLoginCadastro.css">
    </head>
    <body>
        <!--<div class="col-md-12" style="padding:0px">
            <img src="" style="width:10%">
        </div>-->

        <br><br><br><br><br><br>

        <div class="row">
            <div class="col-md-4"> </div>

            <div class="col-md-4">

                <div class="blocoLogin">
                    <form method="post" action="controller/usuarioController.php" class="formLogin">

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
                                require_once './controller/usuarioController.php';

                                $id = $_REQUEST['id'];
                                $usrObject = loadById($id);
                            }
                        }
                        ?>


                        <h1>Cadastrar-se</h1>
                        <p>Preencha os campos abaixo com seus dados</p>
                        
                        <input type="hidden" name="id" value="<?php echo @(isset($usrObject) ? $usrObject->getId() : '') ?>">

                        <label for="nome">Email:</label>
                        <input type="email" value="<?php echo @(isset($usrObject) ? $usrObject->getEmail() : '') ?>" name="user" required="" placeholder="Insira seu email">

                        <label for="nome">Nome:</label>
                        <input type="text" value="<?php echo @(isset($usrObject) ? $usrObject->getNome() : '') ?>" name="nome" required="" placeholder="Insira seu nome">
                        
                        <label for="descricao">Senha:</label>
                        <input type="password" id="password" value="<?php echo @(isset($usrObject) ? $usrObject->getPassword() : '') ?>" name="password" required="" placeholder="Crie uma senha">

                        <input type="submit" class="btn btn-danger" value="Salvar informações">
                    </form>
                </div>

            </div>

            <div class="col-md-4"></div>
        </div>



        <div class="col-md-4"></div>


    </body>
</html>
