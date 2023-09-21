<?php
    include "menu.php";
    require "src/Disco.php";
    require "src/DiscoDAO.php";
    require "funcoes.php";
?>

<h2>Cadastro de Discos</h2>
<div>

<?php
    $artista = $_POST['artista'];
    $titulo = $_POST['titulo'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];

    $imagem = pegarImagem($_FILES);

    //montar objeto com os dados
    $disco = new Disco();
    $disco->setArtista($artista);
    $disco->setTitulo($titulo);
    $disco->setValor($valor);
    $disco->setQuantidade($quantidade);
    $disco->setDescricao($descricao);
    $disco->setImagem($imagem);


    //inserir no banco de dados
    $discoDAO = new DiscoDAO();
    $discoDAO->cadastrarDisco($disco);

?>

<span class="destque">O cadastro do disco foi efetuado com sucesso </span><br><br>

</div>
<?php
    include "rodape.php";
?>