<?php include "config.inc.php"; ?>

<?php

$id = $_REQUEST['id'];

$sql = "DELETE FROM faleconosco WHERE id='$id'";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Não foi possivel deletar o contato requisitado.";
}else{
    echo "Contato deletado com sucesso.
    <a href='listar.php'>Voltar</a>";
}

?>