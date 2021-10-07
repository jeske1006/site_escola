<?php
require 'Conexao.php';

class Curso
{

    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    public function listar()
    {

        $sql = 'SELECT * FROM curso;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }

    public function inserir($nome, $descricao)
    {
        $sql = 'insert into curso(nomcur, desccur) values (?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);

        $q->execute();
    }

    public function getCurso($codcur)
    {

        $sql = 'select * from curso where codcur = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codcur);

        $q->execute();

        $curso = [];

        foreach ($q as $c) {
            $curso = $c;
        }

        return $curso;
    }

    public function editar($codcur, $nomcur, $desccur){

        $sql ='update curso set nomcur = ?, desccur = ? where codcur = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomcur);  
        $q->bindParam(2, $desccur);
        $q->bindParam(3, $codcur);

        $q->execute();

    }

    public function eliminar($codcur){

        $sql = "delete from curso where codcur = ?";

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codcur);

        $q->execute();

    }
}
