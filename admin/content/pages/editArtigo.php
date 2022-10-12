<div class="container pt-3 pb-3 col-6 ">

<?php 
  if(isset($_GET['r'])){
    if($_GET['r']=='empty'){ ?>
      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
          Preencha todos os campos para editar um artigo
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   <?php } 
    }?>

    <h5 class="text-center">Artigo</h5>
    <?php include('db/getArtigobyID.php');
     $catg= $rowArt['categoria_id'] ?> 
<div class="text-end">
  <a onclick="edit_artigo()" class="btn" id="btn-editar" style="display: inline;"><i class="fa-solid fa-pen-to-square fa-l"></i>Editar</a>
  <a onclick="cancelar_artigo()" class="btn" id="btn-cancelar" style="display: none;"><i class="fa-solid fa-xmark fa-l"></i>Cancelar</a>

</div>

<form action="db/updateArtigo.php" method="post">
<input type="number" class="form-control" id="form-id" name="form-id" value="<?=$rowArt["id"]?>" readonly hidden>
  <div class="mb-3">
    <label for="form-titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="form-titulo" name="form-titulo" require value="<?=$rowArt["titulo"]?>" readonly>
  </div>
  <div class="mb-3">
    <label for="form-descricao" class="form-label">Descrição</label>
    <textarea class="form-control" rows="5" id="form-descricao" name="form-descricao" readonly><?=$rowArt["descricao"]?></textarea>
  </div>
  <div class="mb-3">
    <label for="form-desenvolvimento" class="form-label">Desenvolvimento</label>
    <textarea class="form-control" rows="5" id="form-desenvolvimento" name="form-desenvolvimento" readonly><?=$rowArt["desenvolvimento"]?></textarea>
  </div>
  <div class="mb-3">
    
    <label for="form-categoria" class="form-label">Categoria</label>
    <select type="text" class="form-select" id="form-categoria" name="form-categoria" require disabled>
        
       <?php include('db/selectCategorias.php') ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="form-visibility" class="form-label">Visibilidade</label>
    <div class="container">
        
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="1" readonly<?php if($rowArt['visibility']==1){?> checked <?php }?> > Visivel</label>
         </div>
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="0"  readonly<?php if($rowArt['visibility']==0){?> checked <?php }?> > Oculta</label>
         </div>
    </div>
       <!--VALIDAR SE CATEGORIA ESCOLHIDA ESTA OCULTA E MARCAR LOGO VISIBILIDADE OCULTA-->
  </div>
  <button type="submit" class="btn btn-primary" style="display: none;" id="btn-submeter">Editar</button>
  <a href="index.php?pag=artigo" class="btn btn-primary" style="display: inline;" id="btn-voltar">Voltar</a>
</form>
</div>