<?php
    include "menu.php";
    require "src/DiscoDAO.php";

    $id = $_GET['id'];
    $discoDAO = new DiscoDAO();
    $disco = $discoDAO->obterDiscoPorId($id);
?>

    <h2>Edição de discos</h2>
    <form enctype="multipart/form-data" action="edita_disco.php?id=<?=$disco['id']?>" method="POST"> 
    
            <label for="artistaInput">Artista: </label>
            <input type="text" name="artista" value="<?=$disco['artista']?>"id="artistaInput" class="input-padrao" required="true" size=50>

            <label for="tituloInput">Titulo: </label>
            <input type="text" name="titulo" value="<?=$disco['titulo']?>"id="tituloInput" class="input-padrao" size=50>

            <label for="valorInput">Valor: </label>
            <input type="number" name="valor" value="<?=$disco['valor']?>"id="valorInput" class="input-padrao" required="true" size=5>
            
            <label for="quantidadeInput">quantidade: </label>
            <input type="text" name="quantidade" value="<?=$disco['quantidade']?>"id="valorInput" class="input-padrao" required="true" size=5>

            <label for="descricaoInput">Descrição do Disco: </label>
            <textarea name="descricao" id="descricaoInput" cols="50" rows="5"><?=$disco['descricao']?></textarea>

            <label for="imagemInput">Imagem do Disco: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">

            <button type="submit" id="botaoId">Atualizar</button>

    </form>