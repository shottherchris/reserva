<?php
use App\Servidor;
use App\Item;
use App\Emprestimo;
require('../vendor/autoload.php');
$action = $_GET['action'];
$emprestimo = new Emprestimo();
switch($action){
    case 'cadastrar':
        $item = new Item();
        $item->id =$_POST['item'];
        $emprestimo->item = $_POST['item'];
        $servidor = new Servidor();
        $servidor->id = $_POST['servidor'];
        $emprestimo->item = $item;
        $emprestimo->servidor = $servidor;
        $emprestimo->data_emprestimo = $_POST['data_emprestimo'];
        $emprestimo->data_devolucao = $_POST['data_devolucao'];
        $emprestimo->cadastrar();
        header('location: /reserva/view/emprestimo/listar.php');
    break;
    case 'alterar':
        $emprestimo = Emprestimo::buscarPorId($_GET['id']);
        $emprestimo ->item->id = $_POST['item'];
        $emprestimo ->servidor->id = $_POST['servidor'];
        $emprestimo->data_emprestimo = $_POST['data_emprestimo'];
        $emprestimo->data_devolucao = $_POST['data_devolucao'];
        $emprestimo->alterar();
        header('location: /reserva/view/emprestimo/listar.php');        
    break;
    case 'excluir':
        $emprestimo->id = $_GET['id'];
        $emprestimo->excluir();
        header('location: /reserva/view/emprestimo/listar.php');
    break;
}