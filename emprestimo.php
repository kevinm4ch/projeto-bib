<?php
    require_once 'header.php';
    require_once 'buscar_livro.php';
?>
<main id="emprestimo" class="main-container">
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
            <input type="button" id="incluir-titulo" class="bib-button bib-button-secundary" value="Incluir Título"></input>
            
            <!-- <div id="info-data-emprestimo">
                <div>
                    <label for="data-emprestimo">Data do Empréstimo:</label>
                    <input type="text" name="data-emprestimo" id="data-emprestimo" value="dd/mm/aaaa" disabled>
                </div>
                <div>
                    <label for="data-prevista-devolucao">Data Prevista da Devolução:</label>
                    <input type="text" name="data-prevista-devolucao" id="data-prevista-devolucao" value="dd/mm/aaaa" disabled>
                </div>
            </div> -->
            
            <button type="submit" id="concluir" class="bib-button bib-button-primary">Concluir</button>
        </form>
    </div>

</main>

<?php
require_once 'footer.php';
?>