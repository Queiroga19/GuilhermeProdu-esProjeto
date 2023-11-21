<?php include "config.inc.php"; ?>
<?php include "alterarContato.php"; ?>

<?php

$id = $_REQUEST['id'];
$nome = $_REQUEST['Nome'];
$sobrenome = $_REQUEST['Sobrenome'];
$email = $_REQUEST['E-mail'];
$assunto = $_REQUEST['Assunto'];
$mensagem = $_REQUEST['Mensagem'];

$sql = "UPDATE faleconosco SET nome='$nome', sobrenome='$sobrenome', email='$email', assunto='$assunto', mensagem='$mensagem' WHERE id='$id'";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Não foi possivel alterar o contato requisitado.";
}else{
    echo "Contato alterado com sucesso.
    <a href='listar.php'>Voltar</a>";
}

?>