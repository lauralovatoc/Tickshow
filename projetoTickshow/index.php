<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tickshow!</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>

        <style>
            body{
                background-image: url(img/capamulti.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }

            .blocoLogin{
                padding:20px;
                background-color: #903373;
                opacity: 80%;
                border: solid #903373 3px;
                height:100%;
            }
      

        </style>
    </head>
    <body>
        <br><br><br><br><br><br>

        <div class="row">
            <div class="col-md-4"> </div>

            <div class="col-md-4">
                <form method="post" action="controller/loginController.php">
                    <div class="blocoLogin">
                        <div>
                            <h3 class="titleLogin" style="color:black">Login</h3>
                        </div>

                        <div>
                            <label class="form-label" for="email" style="color:black">Email:</label>
                            <input class="form-control" type="email" id="email" 
                                   placeholder="Insira seu email" name="email" required="">
                        </div>

                        <div>
                            <label class="form-label" for="senha" style="color:black">Senha:</label>
                            <input class="form-control" type="password" id="senha" 
                                   placeholder="Insira sua senha" name="senha" required="">
                        </div>

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
                            <label for="lembrar" class="form-check-label" style="color:black">Lembre de mim</label>
                        </div>

                        <br>
                        <div class="d-grid">
                            <input type="submit" value="Entrar"
                                   class="btn btn-primary active" >
                        </div>

                        <!-- <div class="d-grid">
                        <?php
                        //para verificar senha ou email

                        @$cod = $_REQUEST['cod'];
                        if (isset($cod)) {

                            if ($cod == '171') {  //codigo caso os dados estejam errados => loginController
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
                         </div> -->
                    </div>

                </form>
            </div>

            <div class="col-md-4"></div>
        </div>
    </body>
</html>
