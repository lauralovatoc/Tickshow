'<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tickshow!</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>

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
                    <form method="post" action="controller/loginController.php" class="formLogin">

                        <h1>Login</h1>
                        <p>Insira os dados do seu perfil nos campos abaixo.</p>
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Insira seu email" required="">

                        <label for="password">Senha:</label>
                        <input type="password" placeholder="Insira sua senha" required="">

                        <div>
                        <?php
                        if (isset($_COOKIE['email'])) {
                            echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                           name="lembrar" checked value="1">');
                        } else {
                            echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                           name="lembrar" value="1">');
                        }
                        ?>
                        <label for="lembrar" style="color: #666">Lembre de mim</label>
                        </div>
                        
                        <a href="/">Esqueceu a senha?</a>
                        <input type="submit" class="btn" value="Entrar">
                        
                        <?php
                        //para verificar senha/email

                        @$cod = $_REQUEST['cod'];
                        if (isset($cod)) {
                            if ($cod == '171') {  
                                echo ('<br><div class="alert alert-danger">');
                                echo ('Verifique usuário ou senha.');
                                echo ('</div>');
                            } else if ($cod == '172') {
                                echo ('<br><div class="alert alert-warning">');
                                echo ('Sua sessão expirou. Realize o login novamente.');
                                echo ('</div>');
                            }
                        }
                        ?>
                        
                    </form>
                </div>

            </div>

            <div class="col-md-4"></div>
        </div>
        </body>
</html>
