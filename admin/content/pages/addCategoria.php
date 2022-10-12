<div class="container pt-3 pb-3 col-6 ">
<?php
if(isset($_GET['insert'])){
    if($_GET['insert']=='empty'){ ?>
      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
          Preencha todos os campos para criar uma categoria
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php } 
   }?>

<form action="db/insertCategoria.php" method="post">
  <div class="mb-3">
    <label for="form-nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="form-nome" name="form-nome" require>
  </div>
  <div class="mb-3">
    <label for="form-nome-icon" class="form-label">Nome do icon</label>
    <input type="text" class="form-control" id="form-nome-icon" name="form-nome-icon" placeholder="(fa-xxx)" require>
  </div>
  <div class="mb-3">
    <label for="form-visibility" class="form-label">Visibilidade</label>
    <div class="container">
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="1" require>Visivel</label>
         </div>
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="0" require>Oculta</label>
         </div>
    </div>
       <!--VALIDAR SE CATEGORIA ESCOLHIDA ESTA OCULTA E MARCAR LOGO VISIBILIDADE OCULTA-->
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
</div>