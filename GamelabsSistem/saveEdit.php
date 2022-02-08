<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $plano = $_POST['plano'];
        $linksite = $_POST['linksite'];
        $preco = $_POST['preco'];
        


        
        $sqlInsert = "UPDATE planos 
        SET plano='$plano',linksite='$linksite', preco= '$preco'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>