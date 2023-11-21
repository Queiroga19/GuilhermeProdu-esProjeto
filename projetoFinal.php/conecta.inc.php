<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    // conectando ao BD criado
    $bd = mysqli_select_db($conexao, "projetofinal");
    
    // Executando query e retornando valores da tabela "faleconosco"
    //$query = mysqli_query($conexao, "SELECT * FROM faleconosco");


    
?>