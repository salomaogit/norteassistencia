<div>
    <?php
        session_start();
        
        if(isset($_SESSION["resp"])){
            $servico = $_SESSION["resp"];
            switch($servico){
                case "1": 

            ?>                                
    
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Parabens!</strong> Sua solicitação de serviço foi enviada com sucesso, aguarde o nosso contato para a continuação do atendimento ou, se preferir, entre em contato ou venha até a nossa loja.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
            <?php

                break;
                
                case "0":
    
            ?>                                
    
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Problema ao enviar solicitação!</strong> Sua solicitação não foi enviada, favor fazê-la novamente para que possamos atendê-lo ou, se preferir, entre em contato ou venha até a nossa loja.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>    
    
            <?php
            
                
                break;
               
            }
            unset($_SESSION["resp"]);

            
        }


        
        if(isset($_GET["srv"])){
            $servico = $_GET["srv"];
        }
        else{
            $servico = "eletronica";
        }
        switch($servico){
            case "eletronica":
                include_once "view/eletronica.php";
            break;
            case "infohard":
                include_once "view/infohard.php";
            break;
            case "infosoft":
                include_once "view/infosoft.php";
            break;
        }
    ?>
</div>