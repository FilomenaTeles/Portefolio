<div class="conteiner pt-3 pb-3">

<?php 
  if(isset($_GET['r'])){
    if($_GET['r']=='delok'){ ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          Imagem eliminada com sucesso
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php }
   if($_GET['r']=='delerro'){ ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        Erro ao eliminar imagem
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
 <?php }
  
    if($_GET['r']=='insertok'){ ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          Imagem criado com sucesso
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php }
   if($_GET['r']=='inserterro'){ ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        Erro ao criar imagem
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
 <?php }

  if($_GET['r']=='editok'){ ?>
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Imagem editado com sucesso
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
<?php }
  if($_GET['r']=='editerro'){ ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
          Erro ao editar imagem
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
<?php }
  }
  ?>

<table class="table table-hover tableFixHead">
  <thead>
    <tr>
    <th>
        <a href="index.php?pag=addImagem" data-toggle="tooltip" title="Criar Categoria!"><i class="fa-solid fa-plus fa-xl fa-fade"></i></a>
      </th>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Imagem</th>
      <th scope="col">Artigo</th>
      <th scope="col">Visibilidade</th>
    </tr>
  </thead>
  <tbody>
    <?php include('db/getImg.php');
     ?>
  </tbody>
</table>
</div>
