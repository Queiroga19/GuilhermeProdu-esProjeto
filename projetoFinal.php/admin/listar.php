
<h1>Lista de contatos</h1>

<?php include "config.inc.php"; ?>
<?php

$busca = "SELECT * FROM faleconosco order by id";

$todos = mysqli_query($conexao, $busca)
?>

<table>
    <tr>

        <td style="width: 25px;">ID</td>
        <td style="width: 105px;">Nome</td>
        <td style="width: 105px;">Sobrenome</td>
        <td style="width: 105px;">E-mail</td>
        <td style="width: 105px;">Assunto</td>
        <td style="width: 205px;">Mensagem</td>

    </tr>

    <form action = "alterarContato.php" method = "post">
    
    
    <button type="submit" class="w-100 btn-primary">Alterar</button>
</form>

    <form action = "deletarContato.php" method = "post">


    <button type="submit" class="w-100 btn-primary">Deletar</button>
    


    <?php while($dados=mysqli_fetch_array($todos)) {?>

    <tr>

        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['sobrenome'];?></td>
        <td><?=$dados['email'];?></td>
        <td><?=$dados['assunto'];?></td>
        <td><?=$dados['mensagem'];?></td>
        
    </tr>

    <?php } ?>


    </table>
