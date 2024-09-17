<?php
require_once 'header.php';
?>
<main class="main-container">
    <div class="main-content">
        <div class="group-title">
            <img class="bib-icon" src="img/emprestimo.png" alt="emprestimo">
            <h1>Novo Empréstimo</h1>
        </div>
        <form method="post">
            <div id="input-aluno" class="input-group">
                <label for="aluno">Aluno:</label>
                <input type="text" name="aluno" id="aluno">
            </div>
            <button id="incluir-titulo" class="bib-button bib-button-secundary">Incluir Título</button>
            <div id="info-data-emprestimo">
                <div>
                    <label for="data-emprestimo">Data do Empréstimo:</label>
                    <input type="text" name="data-emprestimo" id="data-emprestimo" value="dd/mm/aaaa" disabled>
                </div>
                <div>
                    <label for="data-prevista-devolucao">Data Prevista da Devolução:</label>
                    <input type="text" name="data-prevista-devolucao" id="data-prevista-devolucao" value="dd/mm/aaaa" disabled>
                </div>
            </div>
            <button type="submit" id="concluir" class="bib-button bib-button-primary">Concluir</button>
        </form>
    </div>

</main>

<!-- Modal -->
<div id="modal-bucar-titulo" class="modal main-container">
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
</div>

<?php
require_once 'footer.php';
?>