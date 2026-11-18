<?php
use App\Servidor;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");
$id = $_GET['id'];
$servidor = Servidor::buscarPorId($id);
?>
<main class="container">
    <h1  class="text-center">Alterar Servidor</h1>
    <form method="POST" action="/reserva/action/action_servidor.php?action=alterar&id=<?= $id ?>">
        Nome * : <input name="nome" type="text" value="<?= $servidor->nome?>" class="form-control" required>
        CPF * : <input name="cpf" type="text" value="<?= $servidor->cpf?>" class="form-control">
        Matricula * : <input name="matricula" type="number" value="<?= $servidor->matricula?>" class="form-control" required>
        Data de Nascimento * : <input name="dtn" type="date" value="<?= $servidor->dtn?>" class="form-control" required>
        Telefone * : <input name="telefone" type="text" value="<?= $servidor->telefone?>" class="form-control" required>
        Email * : <input name="email" type="text" value="<?= $servidor->email?>" class="form-control" required>
        Endereço * : <input name="endereco" type="text" value="<?= $servidor->endereco?>" class="form-control" required>
        <input type="submit" value="editar" class="btn btn-primary"> 
    </form>
</main>
