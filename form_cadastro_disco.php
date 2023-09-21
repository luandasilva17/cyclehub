<?php

    include "menu.php";
    
?>
    <h2>Cadastro de Discos</h2>
    <form enctype="multipart/form-data" action="cadastra_disco.php" method="POST"> 
            <label for="artistaInput">Artista: </label>
            <input type="text" name="artista" id="artistaInput" class="input-padrao" required="true" size=50>

            <label for="tituloInput">Titulo: </label>
            <input type="text" name="titulo" id="tituloInput" class="input-padrao" size=50>

            <label for="valorInput">Valor: </label>
            <input type="text" name="valor" id="valorInput" class="input-padrao" required="true" size=5>
            
            <label for="quantidadeInput">quantidade: </label>
            <input type="text" name="quantidade" id="valorInput" class="input-padrao" required="true" size=5>

            <label for="descricaoInput">Descrição do Disco: </label>
            <textarea name="descricao" id="descricaoInput" cols="50" rows="5"></textarea>

            <label for="imagemInput">Imagem do Disco: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">

            <button type="submit" id="botaoId">Cadastrar</button>

    </form>

<?php

    include "rodape.php";
?>