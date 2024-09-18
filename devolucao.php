<?php
    require_once 'header.php';
?>
<main id="devolucao" class="main-container">
    <div class="main-content">
        <div class="group-title">
            <img class="bib-icon" src="img/devolucao.png" alt="devolucao">
            <h1>Nova Devolução</h1>
        </div>
        <form method="post">
            <label for="aluno">Aluno:</label>
            <div id="input-busca" class="input-group">
                <input type="text" name="aluno" id="aluno">
                <button id="bib-button-buscar" class="bib-button bib-button-secundary">Buscar</button>       
            </div>
            
        </form>
    </div>
</main>

<div class="main-container">
    <div class="group-title">
       <h1>Livros com {user-name}</h1>
    </div>
</div>


