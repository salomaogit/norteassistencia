<?php
// if (file_exists('../connect/connection.php')) {
//     require_once '../connect/connection.php';
// } else {
//     require_once 'connect/connection.php';
// }

class SolicitacaoDAO
{
    public $conn;

    public function __construct()
    {
        $this->conn = Conexao::conectar();
    }

    public function salvar($solicitacao)
    {
        $sql = 'insert into solicitacao(sol_email,sol_nome,sol_fone,sol_data,sol_status,sol_categoria,sol_servico,sol_descricao) values(:email,:nome,:fone,:data,:status,:categoria,:servicos,:descricao)';
        $instrucao = $this->conn->prepare($sql);

        $instrucao->bindValue(':fone', $solicitacao->telefone);
        $instrucao->bindValue(':nome', $solicitacao->nome);
        $instrucao->execute();
    }

    public function listarsolicitacao()
    {
        $sql = "select cli_id, cli_nome from solicitacao";
        $instrucao = $this->conn->prepare($sql);
        $instrucao->execute();
        return $instrucao->fetchAll(PDO::FETCH_ASSOC);
    }
}
