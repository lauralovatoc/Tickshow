<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar evento</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="estiloLoginCadastro.css">
    </head>
    <body>
        <!--<div class="col-md-12" style="padding:0px">
            <img src="img/Ticket.png" style="width:10%">
        </div>-->

        <br><br><br>

        <div class="row">
            <div class="col-md-4"> </div>

            <div class="col-md-4">

                <div class="blocoLogin">
                    <form method="post" action="./controller/eventosController.php" class="formLogin">

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
                                require_once './controller/eventosController.php';

                                $id = $_REQUEST['id'];
                                $eventosObject = loadById($id);
                            }
                        }
                        ?>


                        <h1>Cadastrar Evento</h1>
                        <p>Preencha os campos abaixo com os dados do evento.</p>
                        
                        <input type="hidden" name="id" value="">

                        <label for="nome">Nome do evento:</label>
                        <input type="text" value="" name="nome" required="" placeholder="Insira o nome">
                        
                        <label for="loteUm">Quantidade de ingressos:</label>
                        <input type="number" name="quant_ing" required="" placeholder="Insira uma quantidade">

                        <label for="loteUm">Valor do ingresso:</label>
                        <input type="number" name="valor" required="" placeholder="Insira um valor">

                        <label for="url">URL da imagem escolhida:</label>
                        <input type="text" name="img" required="" placeholder="Insira um URL">
                        

                        <input type="submit" name="cadastrarEvento" class="btn" value="Salvar informações">
                    </form>
                </div>

            </div>

            <div class="col-md-4"></div>


    </body>
</html>
