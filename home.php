<?php
    require_once 'header.php';
?>

<main class="main-container">
    <nav class="links-rapidos">
        <ul>
            <li>
                <a href="emprestimo.php">
                    <img class="bib-icon" src="img/emprestimo.png" alt="emprestimo">
                    <p>Empréstimo</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="bib-icon" src="img/devolucao.png" alt="devolucao">
                    <p>Devolução</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="bib-icon" src="img/busca.png" alt="busca">
                    <p>Buscar<br />Título</p>
                </a>
            </li>
        </ul>
    </nav>
</main>

<?php 
    include_once 'footer.php';
?>