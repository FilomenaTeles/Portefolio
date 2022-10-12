<div class="container pt-3 pb-3 col-6 ">
<?php
if(isset($_GET['insert'])){
    if($_GET['insert']=='empty'){ ?>
      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
          Preencha todos os campos para adicionar uma imagem
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php } 
   }?>

<form action="db/insertImagem.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="form-photo" class="form-label">Imagem</label>
    <input type="file" class="form-control" id="form-photo" name="form-photo">
  </div>

  <div class="mb-3">
    <label for="form-artigo" class="form-label">Artigo</label>
    <select type="text" class="form-select" id="form-artigo" name="form-artigo" require> 
       <?php
       $artigo=$rowImag["artigo_id"];
        include('db/selectTituloArtigos.php') ?>
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
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
</div>