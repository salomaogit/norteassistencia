<?php
    require_once '../connect/connection.php';
    class MovimentoDAO{
        public $conn;
        
        public function __construct(){
            $this->conn = Conexao::conectar();
        }

        public function salvar($movimento){
            $sql = 'insert into movimento(mov_data_hora, mov_valor,mov_status,mov_con_id) values(:data,:val,:status,:con)';
           $instrucao = $this->conn->prepare($sql);
           $instrucao->bindValue(':data',$movimento->dataHora);
           $instrucao->bindValue(':status',$movimento->status);
           $instrucao->bindValue(':val',$movimento->valor);
           $instrucao->bindValue(':con',$movimento->conta->id);
           $instrucao->execute();           
        }

    }
