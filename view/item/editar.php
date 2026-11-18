<?php
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");
$id = $_GET['id'];
$item = Item::buscarPorId($_GET['id']);

?>
<main class="container">
    <h1 class="text-center">Editar Item</h1>
    <form method="POST" action="/reserva/action/action_item.php?action=alterar&id=<?= id ?>">
        Nome * : <input name="nome" type="text" value="<?= $item->nome ?>" class="form-control" required>
        Descrição : <input name="descricao" type="text" value="<?= $item->descricao ?>" class="form-control">
        Patrimônio * : <input name="patrimonio" type="text" value="<?= $item->patrimonio ?>" class="form-control" required>
        <input type="submit" value="Alterar" class="btn btn-primary"> 
    </form>
</main>
