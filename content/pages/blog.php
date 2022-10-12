<div class="container-fluid">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <form class="d-flex" action="index.php">
                <input class="form-control me-2" name="search" type="search" placeholder="Procurar" aria-label="Search">
                <button class="btn" type="submit">Procurar</button>
            </form>
        </div>
    </div>
    <?php 
    if(isset($_GET['r'])){
        if($_GET['r']=='empty'){ ?>
          <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
              Pesquisa vazia
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> 
       <?php }
       }
    if(!isset($_GET['search']))
        include('db/getCategorias.php');
    else
        include('db/selectArtigosSearch.php');  
    ?>

    
</div>

