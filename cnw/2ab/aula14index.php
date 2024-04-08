<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=etec_23293','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("Conctado 2AB - o melhor");
}catch(PDOException $e){
    echo 'Erro:' . $e->getMessage();
    echo("Nao conectado");
}
?>