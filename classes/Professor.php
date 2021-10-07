<?php
require 'Conexao.php';

class Professor
{

    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    public function listar()
    {

        $sql = 'SELECT * FROM professor;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }

    public function inserir($nome, $descricao)
    {
        $sql = 'insert into professor(nomprof, descprof) values (?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);

        $q->execute();
    }

    public function getProfessor($codprof)
    {

        $sql = 'select * from professor where codprof = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codprof);

        $q->execute();

        $professor = [];

        foreach ($q as $p) {
            $professor = $p;
        }

        return $professor;
    }

    public function editar($codprof, $nomprof, $descprof){

        $sql ='update professor set nomprof = ?, descprof = ? where codprof = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomprof);  
        $q->bindParam(2, $descprof);
        $q->bindParam(3, $codprof);

        $q->execute();

    }

    public function eliminar($codprof){

        $sql = "delete from professor where codprof = ?";

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codprof);

        $q->execute();

    }
}
