<?php

if(isset($_GET['pag'])){
    $p=$_GET['pag'];

    if($p == 'inicio')
        include('content/pages/inicio.php');
    else if ($p == 'perc-acad')
        include('content/pages/p_acad.php');
    else if ($p == 'perc-prof')
        include('content/pages/p_prof.php');
    else if ($p == 'projeto')
        include('content/pages/projeto.php');
    else if ($p == 'blog')
        include('content/pages/blog.php');
    else if ($p == 'contactos')
        include('content/pages/contacto.php');
    else if ($p == 'blog-art')
        include('content/pages/artigo.php');
    else if ($p == 'proj-poster1')
        include('content/pages/poster1.php');
    else if ($p == 'proj-poster2')
        include('content/pages/poster2.php');

    else
        include('content/pages/404.php');

}else if(isset($_GET['search']))
    include('content/pages/blog.php');
else{
    include('content/pages/inicio.php');
}
?>