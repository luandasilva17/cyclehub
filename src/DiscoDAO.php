<?php
require_once "ConexaoBD.php";
class DiscoDAO{

    function cadastrarDisco(Disco $disco){

        $conexaoBD = ConexaoBD:: getConexao();

            $sql = "insert into discos (artista, titulo, valor, quantidade, descricao, imagem) values 
            ('{$disco->getArtista()}',
            '{$disco->getTitulo()}',
            '{$disco->getValor()}',
            '{$disco->getQuantidade()}',
            '{$disco->getDescricao()}',
            '{$disco->getImagem()}')";      
                             
            $conexaoBD->exec($sql);
    }

    function editarDisco(Disco $disco) {

        $sql = "update discos set
            artista = '{$disco->getArtista()}',
            titulo = '{$disco->getTitulo()}',
            valor = '{$disco->getValor()}',
            quantidade = '{$disco->getQuantidade()}',
            descricao = '{$disco->getDescricao()}',
            imagem = '{$disco->getImagem()}'
            where id = '{$disco->getId()}'";


        $conexaoBD = ConexaoBD::getConexao();
        $conexaoBD->exec($sql);
    }

     function obterDiscos(){

            $conexaoBD = ConexaoBD:: getConexao();
    
                $sql = "select * from discos";
                                 
                $stmt = $conexaoBD->query($sql);

                $discos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $discos;
    }

   function obterDiscoPorId(int $id){
        $conexaoBD = conexaoBD::getConexao();

        $sql = "select * from discos where id=$id";

        $stmt = $conexaoBD->query($sql);

        $disco = $stmt->fetch(PDO::FETCH_ASSOC);

        return $disco;
    }

   // function atualizarDisco(){

   // }

   function removerDisco(int $id){

        $sql = "delete from discos where id=$id";
        $conexaoBD = conexaoBD::getConexao();
        $conexaoBD->exec($sql);
   }

}
?>