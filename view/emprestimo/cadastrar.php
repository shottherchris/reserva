<?php
Use App\Item;
use App\Servidor;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");
$itens = Item::listar();
$servidores = Servidor::listar();
?>
<main class="container">
    <form method="POST" action="/reserva/action/action_emprestimo.php?action=cadastrar">
        Item * : <select name="item" type="text" class="form-select" required>
            <option>Selecione o item </option>
            <?php foreach ($itens as $item) { ?>
                <option value ="<?= $item->id ?>"><?= $item->nome ?></option>
                <?php  } ?>
</select>
Servidor : <select name="servidor" class="form-select"required>
<option>Selecione o Servidor</option>
<?php foreach ($servidores as $servidor) { ?>
    <option value ="<?= $servidor->id ?> "><?= $servidor->nome?></option>
    <?php    }?>
</select>
Data do emprestimo * : <input name="data_emprestimo" type="datetime-local" class="form-select" required>
Data da devolucao * : <input name="data_devolucao" type="datetime-local" class="form-select" required>
    <input type="submit" value="cadastrar" class="btn btn-primary"> 
    </form>
</main>
