<?php
require 'Conexao.php';

class Cliente
{

    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    public function listar()
    {

        $sql = 'SELECT * FROM cliente;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }

    public function inserir($nome, $descricao)
    {
        $sql = 'insert into cliente(nomcli, desccli) values (?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);

        $q->execute();
    }

    public function getCliente($codcli)
    {

        $sql = 'select * from cliente where codcli = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codcli);

        $q->execute();

        $cliente = [];

        foreach ($q as $c) {
            $cliente = $c;
        }

        return $cliente;
    }

    public function editar($codcli, $nomcli, $desccli){

        $sql ='update cliente set nomcli = ?, desccli = ? where codcli = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomcli);  
        $q->bindParam(2, $desccli);
        $q->bindParam(3, $codcli);

        $q->execute();

    }

    public function eliminar($codcli){

        $sql = "delete from cliente where codcli = ?";

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codcli);

        $q->execute();

    }
}
