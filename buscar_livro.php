<?php 
    require_once 'header.php';
?>

<main id="buscar-livro" class="main-container">
    <div class="main-content">

        <div class="group-title">
            <h1>Buscar Livro</h1>
        </div>
    
        <form method="post">
            <div id="radio-opcoes-busca">
                <p>Buscar por:</p>
                <div>
                    <input type="radio" name="radio-busca" id="radio-busca-codigo" value="código" checked>Código
                </div>
                <div>
                    <input type="radio" name="radio-busca" id="radio-busca-isbn" value="ISBN">ISBN
                </div>
                <div>
                    <input type="radio" name="radio-busca" id="radio-busca-titulo" value="título">Título
                </div>
            </div>
            <div id="input-busca" class="input-group">
                <input type="search" name="busca-livro" id="busca-livro" placeholder="Buscar por código">
                <button id="bib-button-buscar" class="bib-button bib-button-secundary">Buscar</button>
            </div>
            <div id="info-livro">
                <p><strong>Título:</strong></p>
                <p><strong>Autor:</strong></p>
                <p><strong>Editora:</strong></p>
                <p><strong>Ano de publicação:</strong>dd/mm/aaaa</p>
            </div>
            <!-- Alerta: Não há exemplares disponíveis -->
            <div id="alerta-busca-livro">
                <div id="alerta-busca-livro-content" class="bib-danger">
                    <i class="fa-regular fa-circle-xmark"></i><p>Não há exemplares disponíveis para este livro</p>
                </div>
            </div>
    
            <div class="button-group">
                <button id="bib-button-cancelar" class="bib-button bib-button-cancel">Cancelar</button>
                <button type="submit" id="adicionar-livro" class="bib-button bib-button-primary">Adicionar</button>
            </div>
        </form>
    </div>
</main>

<?php 
    require_once 'footer.php';
?>