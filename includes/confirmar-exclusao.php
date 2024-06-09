
<main>

     <h2 class="mt-3">Excluir vaga</h2>

     <form method="post">

         <div class="form-group">
             <p>Você deseja realmente excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>:

         </div>

         <div class="form-group">
             <a href="index.php">
                 <button type="button" class="btn btn sucess">Cancelar</button>
             </a>
              <button type="submit" name="excluir" class="btn btn-sucess">Excluir</button>
        </div>

     </form>

 </main>