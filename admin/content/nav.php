<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand">Área de Administração</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if(isset($_GET['pag'])){if($_GET['pag']=='artigo')echo"active";}?>
            "href="index.php?pag=artigo">Artigos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(isset($_GET['pag'])){if($_GET['pag']=='categorias')echo"active";}?>
            "href="index.php?pag=categorias">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(isset($_GET['pag'])){if($_GET['pag']=='img')echo"active";}?>
            "href="index.php?pag=img">Imagens</a>
        </li>
        <li class="nav-item text-end">
        <?php 
             if(isset($_SESSION['id'])){ ?>
            <a class="btn" href="index.php?pag=logout">Logout</a>
            <?php } ?>
        </li>
    </div>
  </div>
</nav>