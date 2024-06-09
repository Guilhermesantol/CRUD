global$obVaga;
<main>

     <section>
         <a href="Index.php">             <button class="btn btn-sucess">Voltar</button>
         </a>
     </section>

     <h2 class="mt-3"><?=TITLE?></h2>

     <form method="post">

         <div class="form-group">
             <label>Titulo</label>
             <input type="text" class="form-control" name="titulo" value="<?=$obVaga->titulo?>">
         </div>

         <div class="form-group">
             <label>Descrição</label>
             <textarea class="form-control" name="descricao" rows="5"><?=$obVaga->descricao?></textarea>
         </div>

         <div class="form-group">
             <label>Status</label>

             <div>
                 <div class="form-check form-check-inline">
                  <label>
                      <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>> Inativo
                  </label>
                 </div>
             </div>
         </div>

         <div class="form-group">
             <label>Status</label>

             <div>
                 <div class="form-check form-check-inline">
                     <label>
                         <input type="radio" name="ativo" value="s" checked> ativo
                     </label>
                 </div>
             </div>
         </div>

         <div class="form-group">
              <button type="submit" class="btn btn-sucess">Enviar</button>
        </div>
     </form>


     </form>

 </main>