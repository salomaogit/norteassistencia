<?php
    require_once '../dao/solicitacao_dao.php';
    require_once '../model/solicitacao.php';
    session_start();
    $emailExiste = isset($_POST['email']);
    $nomeExiste = isset($_POST['nome']);
    $foneExiste = isset($_POST['fone']);
    $categExiste = isset($_POST['categ']);
    $servExiste = isset($_POST['serv']);
    $descrExiste = isset($_POST['descr']);

    $emailNaoVazio = !empty($_POST['email']);
    $nomeNaoVazio = !empty($_POST['nome']);
    $foneNaoVazio = !empty($_POST['fone']);
    $categNaoVazio = !empty($_POST['categ']);
    $servNaoVazio = !empty($_POST['serv']);
    $descrNaoVazio = !empty($_POST['descr']);
        var_dump($_COOKIE);
        
    if($emailExiste && $nomeExiste && $foneExiste && $categExiste && $servExiste && $descrExiste ){
        if($emailNaoVazio && $nomeNaoVazio && $foneNaoVazio && $categNaoVazio && $servNaoVazio && $descrNaoVazio ){
            
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $telefone = $_POST['fone'];
            $categoria = $_POST['categ'];
            $servico = $_POST['serv'];
            $descricao = $_POST['descr'];
            
            $solicitacao = new Solicitacao();
            $solicitacao->email = $email;
            $solicitacao->nome = $nome;
            $solicitacao->telefone = $telefone;
            $solicitacao->data = date('Y-m-d');
            $solicitacao->status = "solicitado";
            $solicitacao->categoria = $categoria;
            $solicitacao->servico = $servico;
            $solicitacao->descricao = $descricao;

        
            $dao = new SolicitacaoDAO();
        
            $dao->salvar($solicitacao);
            $_SESSION["resp"]="1";
               
              
           
            // header('location:../?pag=servicos&srv=eletronica');
        }else{
            // setcookie("resp","0");
            $_SESSION["resp"]="0";
                      
        }
    }
    header('location:../?pag=servicos&srv=eletronica');
?>
  <!-- <script>
                    window.location.href = "../?pag=servicos&srv=eletronica"
                </script> -->