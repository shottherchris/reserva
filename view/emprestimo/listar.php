<?php

use App\Emprestimo;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");
$emprestimos = Emprestimo::listar();
/*echo "<pre>";
print_r($emprestimos);
echo "</pre>";*/
?>
<main class="container">
    <h2 class="text-center">Lista de Empréstimos</h2>
    <a href='/reserva/view/emprestimo/cadastrar.php'>
    <button class='btn btn-success'>Novo Empréstimo</button></a>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Servidor</th>
                <th>Data do Empréstimo</th>
                <th>Data da Devolução</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        foreach ($emprestimos as $emprestimo) {
        ?>
            <tr>
            <td><?= $emprestimo->id ?></td>
            <td><?= $emprestimo->id_item ?></td>
            <td><?= $emprestimo->id_servidor ?></td>
            <td><?= $emprestimo->data_emprestimo ?></td>
            <td><?= $emprestimo->data_devolucao ?></td>
            <td><a href='/reserva/view/emprestimo/editar.php?id=<?= $emprestimo->id ?>'>
            <button class='btn btn-primary'>Editar</button></a>
            <a href='/reserva/action/action_emprestimo.php?action=excluir&id=<?= $emprestimo->id ?>'>
            <button class="btn btn-danger"
            onclick="return confirm('Deseja realmente excluir esse Empréstimo?');">Excluir</button></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</main>