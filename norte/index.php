<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="assets/estilo/all.css">
    <link rel="stylesheet" href="assets/estilo/estilo.css">
    <title>Norte Assistência</title>
</head>

<body>
    <div class="container">
        <header class="sticky-top bg-dark">
            <div class="row">
                <div class="col-sm-2 text-center">
                    <img src="img/norte_logo.png" class="img-fluid logo-norte" alt="logo">
                </div>
                <div class="col-sm-10" id="titulo">
                    <h2>Norte Assistência Técnica</h2>    
                </div>
            </div>
            <div>
                <?php
                    include_once "view/menu.php";
                ?>
            </div>
            <div>
                <?php
                    if(isset($_GET["pag"])){
                        $pagina = $_GET["pag"];
                    }
                    else{
                        $pagina = "inicio";
                    }
                    if($pagina == "servicos"){
                        include_once "view/menusrv.php";
                    }
                ?>
            </div>
        </header>
        <div class="corpo">
            <?php
                switch($pagina){
                    case "inicio":
                        include_once "view/inicio.php";
                    break;
                    case "quemsomos":
                        include_once "view/quemsomos.php";
                    break;
                    case "faleconosco":
                        include_once "view/faleconosco.php";
                    break;
                    case "servicos":
                        include_once "view/servicos.php";
                    break;
                }
            ?>        
        </div>
    </div>
    <footer class="container bg-secundary">
        <?php
            include_once "view/menuf.php";
        ?>
    </footer>
    <script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>