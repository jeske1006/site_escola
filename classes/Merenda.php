<?php
require 'Conexao.php';

class Merenda
{

    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    public function listar()
    {

        $sql = 'SELECT * FROM merenda;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }

    public function inserir($nome, $descricao)
    {
        $sql = 'insert into merenda(nommer, descmer) values (?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);

        $q->execute();
    }

    public function getMerenda($codmer)
    {

        $sql = 'select * from merenda where codmer = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codmer);

        $q->execute();

        $merenda = [];

        foreach ($q as $m) {
            $merenda = $m;
        }

        return $merenda;
    }

    public function editar($codmer, $nommer, $descmer){

        $sql ='update merenda set nommer = ?, descmer = ? where codmer = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nommer);  
        $q->bindParam(2, $descmer);
        $q->bindParam(3, $codmer);

        $q->execute();

    }

    public function eliminar($codmer){

        $sql = "delete from merenda where codmer = ?";

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codmer);

        $q->execute();

    }
}
