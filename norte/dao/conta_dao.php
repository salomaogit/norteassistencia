<?php
    if(file_exists('../connect/connection.php')){
        require_once '../connect/connection.php';
    }else{
        require_once 'connect/connection.php';

    }
    class ContaDAO{
        public $conn;
        
        public function __construct(){
            $this->conn = Conexao::conectar();
        }

        public function salvar($conta){
            $sql = 'insert into conta(con_numero, con_data_abertura) values(:num,:data)';
           $instrucao = $this->conn->prepare($sql);
           $instrucao->bindValue(':num',$conta->numero);
           $instrucao->bindValue(':data',$conta->dataAbertura);
           $instrucao->execute();
           return $this->conn->lastInsertId();
        }

        public function associar($idCliente, $idConta){
            $sql = "insert into cliente_conta(clc_cli_id, clc_con_id) values(:cli, :con)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':cli',$idCliente);
            $stmt->bindValue(':con',$idConta);
            $stmt->execute();
        }

        public function consultarContaPorNumero($conta){
            $sql = 'select cli_nome,con_id, con_numero, con_saldo  from cliente inner join cliente_conta on cli_id = clc_cli_id inner join conta on clc_con_id = con_id where con_numero = :con';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue('con',$conta->numero,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function atualizarSaldo($conta){
            $sql = 'update conta set con_saldo = :val where con_numero = :con';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue('val',$conta->saldo,PDO::PARAM_STR);
            $stmt->bindValue('con',$conta->numero,PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    