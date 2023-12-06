<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de usuários</title>
        
         <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body >
        <div class="col-md-12" style="padding:0px">
            <a href="home.php"><img src="img/logotick.png" style="width:5%"></a>
        </div>
        
        <main class="container">
            <br>
        <h2>Eventos cadastrados:</h2>
        
        <!--cabeça da tabela-->
        <table class="table">
        <thead>
            <th>Nome</th>
            <th>Quantidade Ingressos</th>
            <th>Valor</th>
            <th>Imagem</th>
            <th>Categoria</th>
        </thead>
        
        <!--corpo da tabela-->
        <tbody>
            <?php
            require_once './controller/eventosController.php';
            $eventosList = loadAllEventos();
            foreach ($eventosList as $result) {
                echo '<tr>';
                    
                    echo '<td>';
                        echo $result['nome'];
                    echo '</td>';
                
                    echo '<td>';
                        echo $result['quant_ing'];
                    echo '</td>';
                    
                    echo '<td>';
                        echo $result['valor'];
                    echo '</td>';

                    echo '<td>';
                        echo $result['img'];
                    echo '</td>';

                    echo '<td>';
                        echo $result['categoria_id'];
                    echo '</td>';

                echo '</tr>';
            }

            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
        $('#eventoTable').DataTable({

        });
    </script>
        </main>
    </body>
</html>
