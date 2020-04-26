<?php
    require_once '../dao/cliente_dao.php';
    require_once '../model/cliente.php';
    
    $nomeExiste = isset($_POST['nome']);
    $foneExiste = isset($_POST['fone']);
    $nomeNaoVazio = !empty($_POST['nome']);
    $foneNaoVazio = !empty($_POST['fone']);

    if($nomeExiste && $foneExiste ){
        if($nomeNaoVazio && $foneNaoVazio){
            $nome = $_POST['nome'];
            $telefone = $_POST['fone'];
            $cliente = new Cliente();
            $cliente->nome =  $nome;
            $cliente->telefone = $telefone;
        
            $dao = new ClienteDAO();
        
            $dao->salvar($cliente);
            header('location:../index.php?pag=cadastro&resp=1');
        }else{
            header('location:../view/cliente_cad_view.php?resp=0');
        }
    }
