<?php

    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Vaga;

    //VALIDAR O ID
    if(isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    $obVaga = Vaga::getVaga($_GET['id']);

    //VALIDAR A VAGA
    if(!$obVaga instanceof Vaga){
        header('location: index.php?status=error');
        exit;
    }

    //vai validar o post
    if(isset($_POST['excluir'])){

        $obVaga->excluir();

        header('location: index.php?status=sucess');
        exit;

    }

    include  __DIR__ .'/includes/header.php';
    include  __DIR__ .'/includes/confirmar-exclusao.php';
    include __DIR__ .'/includes/footer.php';
