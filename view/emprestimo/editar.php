<?php

use App\Emprestimo;

include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/Menu.php");
include("../includes/rodape.php");

$id = $_GET['id'];
if (!$id) {
    die('ID do empréstimo não foi informado!');
}

$emprestimo = Emprestimo::buscarPorId($id);
?>
<main class="container">
    <form action="/reserva/action/action_emprestimo.php?action=alterar&id=<?= (int) $id ?>" method="post">
        ID do item * : <input type="number" name="id_item" value="<?= (int) $emprestimo->id_item ?>" min="1" required class="form-control"><br>
        ID do servidor * : <input type="number" name="id_servidor" value="<?= (int) $emprestimo->id_servidor ?>" min="1" required class="form-control"><br>
        Data do empréstimo * : <input type="datetime-local" name="data_emprestimo" value="<?= htmlspecialchars(str_replace(' ', 'T', substr($emprestimo->data_emprestimo, 0, 16)), ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        Data da devolução : <input type="datetime-local" name="data_devolucao" value="<?= $emprestimo->data_devolucao ? htmlspecialchars(str_replace(' ', 'T', substr($emprestimo->data_devolucao, 0, 16)), ENT_QUOTES, 'UTF-8') : '' ?>" class="form-control"><br>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
</main>
