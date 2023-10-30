<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tickshow!</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

            body {
                font-family: 'Inter', sans-serif;
                margin: 0;
                padding: 0;
                color: black;

                background-image: url(img/capamulti.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }

            .blocoLogin {
                display:flex;
                align-items: center;
                align-content: center;
                justify-content: center;
            }

            .formLogin {
                display: flex;
                flex-direction: column;
                background-color: #fff;
                border-radius: 7px;
                padding:50px;
            }

            .formLogin p {
                color: #666;
                margin-bottom: 25px;
            }

            .formLogin input {
                padding: 15px;
                border: 1px solid #ccc;
                margin-bottom: 20px;
                margin-top: 5px;
                border-radius: 4px;
                outline: none;
            }

            .formLogin input:focus {
                border: 1px solid #7139cc;
            }

            .formLogin a {
                display: inline-block;
                margin-bottom: 20px;
                color: #555;
            }

            .btn {
                background-color: #7139cc;
                color: #fff;
                border: none;
                transition: all linear 160ms;
                margin: 0;

            }

            .btn:hover {
                transform: scale(1.05);
                background-color: #7139cc;
            }


        </style>
    </head>
    <body>
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
                        <input type="submit" value="Entrar" class="btn">
                        
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
