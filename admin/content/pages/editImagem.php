<div class="container pt-3 pb-3 col-6 ">
    <h5 class="text-center">Editar Imagem</h5>
    <?php include('db/getImagembyID.php');
    $categoria_id=$_GET['categoriaId'];
   
    ?> 

    <img class="w-25 admin-imag" src="img/<?= $rowImag['nome']?>" alt="">


<form action="db/updateImagem.php" method="post">
<input type="number" class="form-control" id="form-id" name="form-id" value="<?=$rowImag["id"]?>" readonly hidden>
<input type="number" class="form-control" id="form-old-artigo" name="form-old-artigo" value="<?=$rowImag["artigo_id"]?>" readonly hidden>
  <div class="mb-3">
    <label for="form-nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="form-nome" name="form-nome" require value="<?=$rowImag["nome"]?>" readonly>
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
             <label><input type="radio" name="form-visibility" id="form-visibility" value="1" <?php if($rowImag['visibility']==1){?> checked <?php }?> > Visivel</label>
         </div>
         <div class="radio">
             <label><input type="radio" name="form-visibility" id="form-visibility" value="0" <?php if($rowImag['visibility']==0){?> checked <?php }?> > Oculta</label>
         </div>
    </div>
       <!--VALIDAR SE CATEGORIA ESCOLHIDA ESTA OCULTA E MARCAR LOGO VISIBILIDADE OCULTA-->
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
</div>