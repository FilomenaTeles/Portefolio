<nav class="navbar navbar-expand-lg" id="nav-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link
                <?php if(isset($_GET['pag'])){if($_GET['pag']=='inicio')echo"active";} ?>
                " aria-current="page" href="index.php?pag=inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                <?php if(isset($_GET['pag'])){if($_GET['pag']=='perc-acad')echo"active";} ?>
                " href="index.php?pag=perc-acad">Percurso Académico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                <?php if(isset($_GET['pag'])){if($_GET['pag']=='perc-prof')echo"active";} ?>
                " href="index.php?pag=perc-prof">Percurso Profissional</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                <?php if(isset($_GET['pag'])){if($_GET['pag']=='projeto')echo"active";} ?>
                " href="index.php?pag=projeto">Projetos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                <?php if(isset($_GET['pag'])){if($_GET['pag']=='blog')echo"active";} ?>
                " href="index.php?pag=blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                <?php if(isset($_GET['pag'])){if($_GET['pag']=='contactos')echo"active";} ?>
                " href="index.php?pag=contactos">Contactos</a>
              </li>
            </ul>
          
    </nav>