<div class="container pt-3 pb-3 col-6 ">
    <h5 class="text-center">Editar Categoria</h5>
    <?php include('db/getCategoriabyID.php');?> 

<form action="db/updateCategoria.php" method="post">
<input type="number" class="form-control" id="form-id" name="form-id" value="<?=$rowCatg["id"]?>" readonly hidden>
  <div class="mb-3">
    <label for="form-nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="form-nome" name="form-nome" require value="<?=$rowCatg["name"]?>">
  </div>
  <div class="mb-3">
    <label for="form-nome-icon" class="form-label">Nome Icon</label>
    <input type="text" class="form-control" id="form-nome-icon" name="form-nome-icon" require value="<?=$rowCatg["icon_name"]?>">
  </div>
  <div class="mb-3">
    <label for="form-visibility" class="form-label">Visibilidade</label>
    <div class="container">
        
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="1" <?php if($rowCatg['visibility']==1){?> checked <?php }?> > Visivel</label>
         </div>
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="0" <?php if($rowCatg['visibility']==0){?> checked <?php }?> > Oculta</label>
         </div>
    </div>
       <!--VALIDAR SE CATEGORIA ESCOLHIDA ESTA OCULTA E MARCAR LOGO VISIBILIDADE OCULTA-->
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
</div>