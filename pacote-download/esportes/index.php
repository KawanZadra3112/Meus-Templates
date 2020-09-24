<?php
include('head.php');
?>
    <div class="container-fluid container-fluid-img" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="col-md-3 text-primary padding-top">
                <h1>Turma de Pequenos Grandes Jogadores</h1>
                <p>Sou um parágrafo. Clique aqui para editar e adicionar o seu próprio texto. É fácil!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary padding-bottom modalidades-container">
        <div class="container">
            <div class="col-md-4  text-center padding-top">
                <img src="img/futebol.png" style="width: 200px;">
                <h2>Futebol</h2>
                <span class="glyphicon glyphicon-option-horizontal"></span>
                <p class="padding-bottom">Sou um parágrafo. Clique aqui para adicionar e editar seu próprio texto. É
                    fácil.</p>
                <button class="btn btn-default futhover btn-lg btn-primary"><a style="color: white; text-decoration: none;" href="futebol.php">Saiba Mais</a></button>
            </div>
            <div class="col-md-4 text-center padding-top">
                <img src="img/basquete.png" style="width: 200px;">
                <h2 class="text-uppercase">Basquete</h2>
                <span class="glyphicon glyphicon-option-horizontal"></span>
                <p class="padding-bottom">Sou um parágrafo. Clique aqui para adicionar e editar seu próprio texto. É
                    fácil.</p>
                <button class="btn btn-default btn-lg  btn-primary"><a style="color: white; text-decoration: none;" href="basquete.php">Saiba Mais</a></button>
            </div>
            <div class="col-md-4 text-center padding-top">
                <img src="img/volei.png" style="width: 200px;">
                <h2>Vôlei</h2>
                <span class="glyphicon glyphicon-option-horizontal"></span>
                <p class="padding-bottom">Sou um parágrafo. Clique aqui para adicionar e editar seu próprio texto. É
                    fácil.</p>
                <button class="btn btn-default btn-lg btn-primary"><a style="color: white; text-decoration: none;" href="volei.php">Saiba Mais</a></button>
            </div>
        </div>
    </div>

    <div class="container-fluid fundo-bolvolbas"></div>

    <div class="container-fluid bg-primary" id="galeria">
        <div class="text-center padding">
            <h1>Galeria</h1>
            <p>Sou um parágrafo. Clique aqui para editar</p>
            <p>e adicionar o seu próprio texto. É fácil!</p>
        </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/scroll_01.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/scroll_02.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/scroll_03.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/scroll_04.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/scroll_05.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/scroll_06.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row padding">
        <h1 class="text-center text-primary">Fale Com A Gente</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 bg-primary">
            <div class="row">
                <div class="icons-pg-inicio col-md-6 padding">
                    <h3>Endereço:</h3>
                    <p>Travessa Julius Conus<br/>São Paulo, SP 08382-580</p>
                    <h3>Telefone:</h3>
                    <p>(11) 94489-2084 / (11) 96371-9912</p>
                    <h3>E-mail:</h3>
                    <p>esportes@hotmail.com</p>
                    <h3>Siga em gente:</h3>
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-twitter"
                                                                                             aria-hidden="true"></i>&nbsp;&nbsp;<i
                            class="fa fa-instagram" aria-hidden="true"></i>
                </div>
                <form method="get" class="col-md-6 padding" action="enviado.php">
                    <div class="form-group navbar-form">
                        <input name="nome" class="form-control input-lg" placeholder="Nome">
                    </div>
                    <div class="form-group navbar-form">
                        <input class="form-control input-lg" placeholder="example@hotmail.com">
                    </div>
                    <div class="btn-margin form-group navbar-form">
                        <textarea class="form-control input-lg padding" placeholder="Digite Sua Mensagem Aqui..."
                                  rows="4"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg text-uppercase text-danger text-center btn-warning" value="enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

<?php
include('footer.php');
?>