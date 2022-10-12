<?php

if(isset($_GET['pag'])){
    $p=$_GET['pag'];

    if($p == 'artigo')
        include('content/pages/artigo.php');

    else if($p == 'logout')
        include('content/pages/logout.php');

    else if($p == 'categorias')
        include('content/pages/categorias.php');

    else if($p == 'addArtigo')
        include('content/pages/addArtigo.php');

    else if($p == 'addCategoria')
        include('content/pages/addCategoria.php');

    else if($p == 'editArtigo')
        include('content/pages/editArtigo.php');

    else if($p == 'editCategoria')
        include('content/pages/editCategoria.php');

    else if($p == 'img')
        include('content/pages/img.php');

    else if($p == 'addImagem')
        include('content/pages/addImagem.php');

    else if($p == 'editImagem')
        include('content/pages/editImagem.php');
        
        
    else
        include('content/pages/404.php');

}else{
    include('content/pages/login.php');
}
?>