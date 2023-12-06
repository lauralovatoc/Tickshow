
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tickshow!</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }
            .btn {
                padding: 10px 36px;
                background-color: #333;
                color: white;
                border-radius: 0;
                transition: .1s;
            }
            .btn:hover, .btn:focus {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }
            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 32px;
            }
            footer a {
                color: #f5f5f5;
            }
            footer a:hover {
                color: #777;
                text-decoration: none;
            }
            .cor{
                background-color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
        require_once './shared/header.php';
        ?>
        <main class="container">
            <div>   
                <h3>Stand Up's</h3>
                <div class="row">

                    <div class="col-sm-3">
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading" class="cor">Olirrô: O Pintor</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/comedia/oPintor.jpg" style="width:100%"  alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Junior Moraes: Pronto Falei!</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/comedia/prontoFalei.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Viver de Comédia</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/comedia/semInscritos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Thiago Ventura</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/comedia/thiagoVentura.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <h3>Shows</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Numanice</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/shows/ludmilla.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Maglore - Turnê do disco "V"</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/shows/maglore.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Pablo Vittar - After</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/shows/pabloVittar.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Wesley Safadão e Bell Marques</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/shows/wesleySafadao.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3>Para crianças</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Super Mario</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/infantil/mario.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">O Natal mágico do Mickey</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/infantil/mickey.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Vem Sonhar - Patati e Patata</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/infantil/patatiPatata.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Patrulha Canina - O musical</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/infantil/patrulha.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3>Teatros</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">A Megera Domada</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/teatro/aMegera.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Aladdin</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/teatro/aladdin.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Cinderela</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/teatro/cinderela.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Flávia Reis - Neurótica</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/teatro/neurotica.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3>Festas</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Aurora Verse</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/festas/auroraVerse.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Neon Party</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/festas/neonParty.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Noite na Gaiola</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/festas/noiteNaGaiola.png" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                        <div class="panel" style="background-color: #ac58aa;">
                            <div class="panel-heading">Revoada</div>
                            <div class="panel-body"style="background-color: #fff;"><img src="img/eventos/festas/revoada.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                            <div class="panel-footer" style="background-color: #ac58aa;"></div>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div><br>
        </main>
        <footer class="text-center" style="background-color: #4a1564;">
            <a class="up-arrow" href="eventos.php" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Voltar ao topo</p> 
        </footer>

    </body>
</html>

