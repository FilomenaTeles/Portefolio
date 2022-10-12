<div class="container pt-3 pb-3 col-6 ">
<?php
if(isset($_GET['insert'])){
    if($_GET['insert']=='empty'){ ?>
      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
          Preencha todos os campos para criar um artigo
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php } 
   }?>

<form action="db/insertArtigo.php" method="post">
  <div class="mb-3">
    <label for="form-titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="form-titulo" name="form-titulo" require>
  </div>
  <div class="mb-3">
    <label for="form-descricao" class="form-label">Descrição</label>
    <textarea class="form-control" rows="5" id="form-descricao" name="form-descricao"></textarea>
  </div>
  <div class="mb-3">
    <label for="form-desenvolvimento" class="form-label">Desenvolvimento</label>
    <textarea class="form-control" rows="5" id="form-desenvolvimento" name="form-desenvolvimento"></textarea>
  </div>
  <div class="mb-3">
    <label for="form-categoria" class="form-label">Categoria</label>
    <select type="text" class="form-select" id="form-categoria" name="form-categoria" require>
        <option selected disabled>Escolha uma categoria</option>
       <?php include('db/selectCategorias.php') ?>
    </select>
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