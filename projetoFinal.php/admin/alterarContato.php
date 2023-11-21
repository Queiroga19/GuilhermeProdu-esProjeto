   <h1>Alterar contato</h1>
    <form action="alterarContatobd.php" method="post">

         Digite o ID que deseja alterar:<input type="number" name="id">

         <div class="rowg-3">
            <label>Nome</label>
            <input type="text" name="Nome" class="form-control" required>
         </div>
         <div class="rowg-3">
            <label>Sobrenome</label>
            <input type="text" name="Sobrenome" class="form-control" required>
         </div>
         <div class="rowg-3">
            <label>E-mail</label>
            <input type="email" name="E-mail" class="form-control" required>
         </div>
         <div class="rowg-3">
            <label>Assunto</label>
            <input type="text" name="Assunto" class="form-control" required>
         </div>
         <div class="rowg-3">
            <label>Mensagem</label>
            <input type="text" name="Mensagem" class="form-control" required>
         </div>
         <div class="col-12">
           <button type="submit" class="w-100 btn-primary">Enviar</button>
         </div>
     </form>
