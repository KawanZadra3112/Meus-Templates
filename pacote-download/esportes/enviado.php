<?php
include('head.php');


$nome = $_GET['nome'];
echo '    <div class="icone-check bg-success text-center"><i class="fa fa-check-circle-o"></i>';
echo ' <h1 class="container-fluid text-uppercase padding text-center ">Enviado com Sucesso <br/> Em Breve Retornaremos</h1>     <div class="container col-md-offset-3">
        <div class="btn btn-lg mg-bottom col-md-7 bg-primary"><a class=" text-white" href="index.php">Voltar</a></div>
    </div></div>' . $nome;

?>
<?php
include('footer.php');

